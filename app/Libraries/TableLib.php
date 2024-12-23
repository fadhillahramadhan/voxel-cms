<?php

namespace App\Libraries;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use stdClass;

class TableLib
{
    public function getListTable($request, $select, $table, $join, $where, $group, $pagination = TRUE)
    {
        $params  = $_GET;
        $select_str = '';

        $allowed_filter = [];

        // Filtering STARTS
        foreach ($select as $key => $value) {
            if (gettype($key) == 'integer') {
                $select_str .= $value;
                array_push($allowed_filter, $value);
            } else {
                $select_str .= $key . ' AS ' . $value;
                array_push($allowed_filter, $key);
                array_push($allowed_filter, $value);
            }

            if ($key !== array_keys($select)[count($select) - 1]) {
                $select_str .= ', ';
            }
        }

        $filter = [];
        $filter_query = [];

        foreach (array_keys($params) as $key_allowed_filter => $filter_values) {

            if (in_array($filter_values, $allowed_filter) > 0) {
                $search_is_filter_are_as = array_search($filter_values, $select);

                if (gettype($search_is_filter_are_as) == 'string') {
                    $filter_operators = $params["{$filter_values}"];

                    $filter["{$search_is_filter_are_as}"] = $params["{$filter_values}"];

                    foreach ($filter_operators as $op => $val_op) {
                        $str_query  = $this->getFilter($op, $search_is_filter_are_as, $val_op);
                        array_push($filter_query, $str_query);
                    }
                } else  if (empty($search_is_filter_are_as) || gettype($search_is_filter_are_as) == 'integer') {
                    $filter_operators = $params["{$filter_values}"];
                    $filter["{$filter_values}"] = $params["{$filter_values}"];

                    foreach ($filter_operators as $op => $val_op) {
                        $str_query  = $this->getFilter($op, $filter_values, $val_op);
                        array_push($filter_query, $str_query);
                    }
                }
            }
        }

        $params_string = "";

        foreach ($filter_query as $key => $string_queries) {
            if (!($key == (count($filter_query) + 1)) && $key > 0) {
                $params_string .= ' AND ';
            }
            $params_string .= "$string_queries";
        }

        $params_string = $params_string ? "($params_string)" : "";

        $where_condition = '';
        if ($where) {
            $where_condition = "AND $where ";

            if (!empty($params_string)) {
                $where_condition .= "AND $params_string";
            }
        } else {
            if (!empty($params_string)) {
                $where_condition = "AND $params_string";
            }
        }

        // Filtering ENDS


        // Sorting START
        $sort = isset($params['sort']) && count($params['sort']) ? $params['sort'] : [];
        $sort_query = [];

        foreach ($sort as $key_sort => $val_sort) {
            if (in_array($key_sort, $allowed_filter) > 0) {
                $search_sort_as = array_search($key_sort, $select);
                $val_sort = strtoupper($val_sort);
                $sort = new \stdClass;

                if (gettype($search_sort_as) == 'string' && ($val_sort == 'DESC' || $val_sort == 'ASC')) {
                    $sort->name = $search_sort_as;
                    $sort->val = $val_sort;

                    array_push($sort_query, $sort);
                } else  if (empty($search_sort_as) && ($val_sort == 'DESC' || $val_sort == 'ASC') || gettype($search_sort_as) == 'integer' && ($val_sort == 'DESC' || $val_sort == 'ASC')) {
                    $sort->name = $key_sort;
                    $sort->val = $val_sort;

                    array_push($sort_query, $sort);
                }
            }
        }
        // Sorting ENDS

        $sort_string_queries = '';
        foreach ($sort_query as $key => $value) {
            $sort_string_queries .= "{$value->name} {$value->val}";

            if (isset($sort_query[$key + 1])) {
                $sort_string_queries .= ', ';
            }
        }

        $sort_string = '';

        if ($sort_string_queries) {
            $sort_string .= "ORDER BY $sort_string_queries ";
        }

        $queries = "
        SELECT
            {$select_str}
        FROM {$table}
        $join
        WHERE 1
        $where_condition
        $sort_string
        $group
        ";

        $results = DB::select($queries);

        if (isset($params['pagination']) && $params['pagination'] && strtolower($params['pagination']) == 'false') {
            $data = new \stdClass;
            $data->results =  $results;
            $data->pagination = [];
            return $data;
        } else {
            if ($pagination) {
                $pages = $this->pagination($results, $request, $params_string);

                $data = new \stdClass;
                $data->results = [];

                foreach ($pages->results->items() as $key => $value) {
                    array_push($data->results, (array)$value);
                }

                $data->pagination = $pages->pagination;

                return $data;
            } else {
                $data = new \stdClass;
                $data->results = [];
                $data->results =  $results;
                $data->pagination = [];
                return $data;
            }
        }
    }

    public function getFilter($operator = 'eq', $field, $value = '')
    {
        $string = "";

        switch ($operator) {
            case 'eq':
                $filter = "=";
                $string = "$field $filter '$value'";
                break;
            case 'ne':
                $filter = "!=";
                $string = "$field $filter '$value'";
                break;
            case 'is':
                $filter = "IS NULL";
                $string = "$field $filter '$value'";
                break;
            case 'gt':
                $filter = ">";
                $string = "$field $filter '$value'";
                break;
            case 'gte':
                $filter = ">=";
                $string = "$field $filter '$value'";
                break;
            case 'lt':
                $filter = "<";
                $string = "$field $filter '$value'";
                break;
            case 'lte':
                $filter = "<=";
                $string = "$field $filter '$value'";
                break;
            case 'like':
                $filter = "LIKE";
                $string = "$field $filter '%$value'";
                break;
            case 'notlike':
                $filter = "NOT LIKE";
                $string = "$field $filter '%$value'";
                break;
            case 'substring':
                $filter = "LIKE";
                $string = "$field $filter '%$value%'";
                break;
        }

        return $string;
    }


    public function pagination($array, $request, $where_condition)
    {
        $page = $request->page ?? 1;
        $perPage = $request->limit ?? 10;

        if ($where_condition) {
            $perPage = '999999';
        }

        $offset = ($page * $perPage) - $perPage;


        $pages  = new LengthAwarePaginator(
            array_slice($array, $offset, $perPage, true),
            count($array),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        $pagination = [
            'total' => $pages->total(),
            'per_page' => $pages->perPage(),
            'current_page' => $pages->currentPage(),
            'last_page' => $pages->lastPage(),
            'from' => $pages->firstItem(),
            'to' => $pages->lastItem(),
            // 'details' => $pages->toArray()-
        ];

        $pages_to_array = $pages->onEachSide(1)->toArray();


        foreach ($pages_to_array['links'] as $key => $value) {
            $pagination['links'][$key] = $value;
            $pagination['links'][$key]['label'] = str_replace('&raquo;', '', $pagination['links'][$key]['label']);
            $pagination['links'][$key]['label'] = str_replace('&laquo;', '', $pagination['links'][$key]['label']);
            // remove space also
            $pagination['links'][$key]['label'] = trim($pagination['links'][$key]['label']);

            $pagination['links'][$key]['value'] = (int) $value['label'];

            // if Previous or Next
            if ($pagination['links'][$key]['label']  == 'Previous') {
                $pagination['links'][$key]['value'] = $pagination['current_page'] - 1;
            }

            if ($pagination['links'][$key]['label']  == 'Next') {
                $pagination['links'][$key]['value'] = $pagination['current_page'] + 1;
            }

            // remove raquo and laquo from label
        }


        // remove raquo and laquo

        // remove raquo and laquo from label



        $data = new \stdClass;
        $data->results =  $pages;
        $data->pagination = $pagination;

        return $data;
    }
}
