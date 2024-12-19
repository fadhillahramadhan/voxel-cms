<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


class Dashboard extends Controller
{
    public function dynamicMethod(Request $request, $method)
    {
        if (method_exists($this, $method)) {
            return $this->$method($request);
        } else {
            abort(404);
        }
    }

    public function show()
    {
        return Inertia::render('Admin/Home', [
            'title' => 'Dashboard'
        ]);
    }

    public function datatable(Request $request)
    {

        try {


            $table = 'sys_member';

            $select =  [
                'member_id',
                'member_name',
                'member_email',
                'member_mobilephone',
            ];


            $where = "";

            $join = "";

            $group = "";

            $data = $this->tableLib->getListTable($request, $select, $table, $join, $where, $group);

            foreach ($data->results as $key => $value) {
                // $data->results[$key]['post_url_format'] = '/' . $value['user_username'] . '/' . $value['post_url'];
                // $data->results[$key]['total_hits'] = (int) $value['total_hits'];
                // $data->results[$key]['total_likes'] = (int) $value['total_likes'];
                // $data->results[$key]['total_comments'] = (int) $value['total_comments'];
                // $data->results[$key]['total_shares'] = (int) $value['total_shares'];
                // $data->results[$key]['total_hits_unique'] = (int) $value['total_hits_unique'];
                // $data->results[$key]['total_earnings'] = (int) $value['total_earnings'];
                // $data->results[$key]['total_spend_times'] = (int) $value['total_spend_times'];
            }


            return response()->json([
                'message' => 'Data Member',
                'error' => '',
                'data' => [
                    'results' => $data->results,
                ],
                'pagination' => $data->pagination
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'error' => 'error',
                'data' => []
            ], 400);
        }
    }
}
