<script setup>
import { Head } from "@inertiajs/vue3";
import axios from "axios";
</script>

<template>
    <div class="card full-height-card">
        <!-- Table Content -->
        <div class="card-datatable text-nowrap">
            <div class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row mx-1">
                    <div
                        class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-4 mt-md-0 mt-5"
                    >
                        <div
                            class="dataTables_length"
                            id="DataTables_Table_0_length"
                        >
                            <label
                                >Show
                                <select
                                    name="DataTables_Table_0_length"
                                    aria-controls="DataTables_Table_0"
                                    class="form-select form-select-sm"
                                    v-model.number="config.options.currentLimit"
                                    @change="fetchData"
                                >
                                    <option
                                        v-for="option in config.options.limit"
                                        :key="option"
                                        :value="option"
                                    >
                                        {{ option }}
                                    </option>
                                </select></label
                            >
                        </div>
                        <div
                            class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start"
                        >
                            <div class="dt-buttons btn-group flex-wrap">
                                <slot
                                    name="buttonAction"
                                    :selectedIDs="selectedIDs"
                                />
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-4"
                    >
                        <div
                            id="DataTables_Table_0_filter"
                            class="dataTables_filter"
                        >
                            <div
                                class="flex-grow-1 input-group input-group-sm input-group-merge"
                            >
                                <span class="input-group-text">
                                    <i class="ri-search-line lh-1 ri-20px"></i>
                                </span>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search..."
                                    @input="onSearch"
                                />
                                <span class="input-group-text">
                                    <i
                                        class="ri-add-line lh-1 ri-20px clickable"
                                        data-bs-toggle="modal"
                                        data-bs-target="#datatableSearch"
                                    ></i>
                                </span>
                            </div>
                        </div>
                        <div class="invoice_status mb-5 mb-md-0"></div>
                    </div>
                </div>
                <!-- row badge search and remove filter -->
                <!-- {{ searchAdvanced }} -->
                <div class="row mx-1">
                    <div class="col-12">
                        <!-- MAKE IT DIFF COLOR -->
                        <button
                            class="badge rounded-pill bg-primary mb-2"
                            :key="key"
                            v-for="(filter, key) in currentFilter"
                            @click.prevent="removeFilter(filter)"
                        >
                            {{ filter.title }}: {{ filter.value }}
                            <i class="ri-close-line clickable"></i>
                        </button>
                    </div>
                </div>
                <table
                    class="datatables-ajax table dataTable no-footer cstm-table table-hover mt-3 table-sm"
                >
                    <thead>
                        <tr>
                            <th v-if="config.multipleSelect">
                                <!-- label pilih -->
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    v-model="selectedAll"
                                    @change="selectAll"
                                />
                            </th>
                            <th
                                v-for="column in config.columns"
                                :key="column.key"
                                :class="getColumnClass(column)"
                                @click="sort(column.key)"
                                scope="col"
                            >
                                {{ column.label }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="row in results"
                            :key="row[config.selectID]"
                            class="tb-responsive"
                        >
                            <td
                                v-if="config.multipleSelect"
                                class="container-checkbox-datatable"
                            >
                                <div
                                    class="d-none"
                                    id="label-checkbox-datatable"
                                >
                                    <b> Pilih</b>
                                </div>

                                <input
                                    type="checkbox"
                                    v-model="selectedRows[row[config.selectID]]"
                                    class="form-check-input align-self-end clickable"
                                />
                            </td>
                            <td
                                v-for="column in config.columns"
                                :key="column.key"
                                :data-label="
                                    column.label !== 'Aksi' ? column.label : ''
                                "
                                :class="getAlignmentClass(column)"
                            >
                                <template v-if="$slots[column.key]">
                                    <slot :name="column.key" :row="row" />
                                </template>
                                <template v-else>
                                    {{ row[column.key] ?? "-" }}
                                </template>
                            </td>
                        </tr>
                        <tr v-if="!results.length">
                            <td
                                :colspan="config.columns.length + 1"
                                class="text-center"
                            >
                                No data available
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div
                            class="dataTables_info"
                            id="DataTables_Table_0_info"
                            role="status"
                            aria-live="polite"
                        >
                            Menampilkan {{ pagination.from }} sampai
                            {{ pagination.to }} dari {{ pagination.total }} data
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-6 d-flex justify-content-sm-center justify-content-md-end align-items-center"
                        id="pagination-container"
                    >
                        <nav aria-label="Page navigation">
                            <ul
                                class="pagination pagination-rounded pagination-outline-primary"
                            >
                                <li
                                    v-for="link in pagination.links"
                                    :key="link.label"
                                    :class="[
                                        'page-item',
                                        { active: link.active },
                                    ]"
                                >
                                    <a
                                        v-if="link.url || link.label === '...'"
                                        class="page-link waves-effect"
                                        @click.prevent="fetchData(link.value)"
                                    >
                                        {{ link.label }}
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        id="datatableSearch"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="datatableSearchLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="datatableSearchLabel">
                        Pencarian
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <!-- based on that create input dynamic -->
                    <div class="form-group" v-for="column in config.columns">
                        <label
                            :for="column.key"
                            v-if="
                                column.type === 'text' || column.type === 'date'
                            "
                            :placeholder="'Cari ' + column.label"
                            >{{ column.label }}</label
                        >
                        <input
                            type="text"
                            class="form-control mb-3"
                            :id="column.key"
                            v-if="column.type === 'text'"
                            :placeholder="'Cari ' + column.label"
                            v-model="searchAdvanced[column.key + '[substring]']"
                        />
                        <!-- if date theres 2 input start and end -->

                        <div class="row mb-3" v-if="column.type === 'date'">
                            <div class="col-6">
                                <input
                                    type="date"
                                    class="form-control"
                                    :id="column.key"
                                    v-if="column.type === 'date'"
                                    v-model="
                                        searchAdvanced[column.key + '[gte]']
                                    "
                                />
                            </div>
                            <div class="col-6">
                                <input
                                    type="date"
                                    class="form-control"
                                    :id="column.key"
                                    v-if="column.type === 'date'"
                                    v-model="
                                        searchAdvanced[column.key + '[lte]']
                                    "
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-dismiss="modal"
                        @click="fetchData"
                    >
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
</template>

<script>
export default {
    props: {
        tables: {
            type: Object,
            required: true,
            validator(value) {
                return (
                    typeof value.title === "string" &&
                    Array.isArray(value.columns) &&
                    value.columns.every((col) => typeof col.key === "string")
                );
            },
        },
    },
    data() {
        return {
            config: this.tables,
            // Table data
            results: [],
            pagination: {},
            // Selected rows
            selectedAll: false,
            selectedRows: {},
            // sort
            sortedColumn: {},
            searchAdvanced: {},
        };
    },
    computed: {
        selectedIDs() {
            return Object.keys(this.selectedRows).filter(
                (key) => this.selectedRows[key]
            );
        },
        selectedData() {
            return this.results.filter((key) => this.results[key]);
        },
        currentFilter() {
            return Object.keys(this.searchAdvanced).map((key) => {
                // key would be like this member_name[substring] or some other like this member_activation_datetime[gte]

                const [newKey] = key.split("[");
                const column = this.config.columns.find(
                    (col) => col.key === newKey
                );

                return {
                    key: newKey,
                    real_key: key,
                    title: column.label,
                    value: this.searchAdvanced[key],
                };
            });
        },
    },
    methods: {
        fetchData(page = 1) {
            if (typeof page !== "number") {
                page = 1;
            }

            // close modal search

            this.selectedAll = false;
            this.selectedRows = {};

            // remove searchAdvance obj if empty
            Object.keys(this.searchAdvanced).forEach((key) => {
                if (!this.searchAdvanced[key]) {
                    delete this.searchAdvanced[key];
                }
            });

            axios
                .get(this.config.url, {
                    params: {
                        sort: this.sortedColumn,
                        limit: this.config.options.currentLimit,
                        ...this.searchAdvanced,
                        page,
                    },
                })
                .then(({ data }) => {
                    this.results = data.data.results;
                    this.pagination = data.pagination;
                })
                .catch(() => {
                    this.results = [];
                });
        },
        sort(key) {
            const column = this.config.columns.find((col) => col.key === key);
            if (column?.sort) {
                column.sorting = column.sorting === "asc" ? "desc" : "asc";
            }

            this.sortedColumn[key] = column.sorting;

            console.log("Sorted Column", this.sortedColumn);

            this.fetchData();
        },
        selectAll() {
            this.results.forEach((row) => {
                this.selectedRows[row[this.config.selectID]] = this.selectedAll;
            });
        },
        getColumnClass(column) {
            return [
                column.sort ? `sorting sorting_${column.sorting}` : "",
                column.align ? `text-${column.align}` : "",
            ];
        },
        getAlignmentClass(column) {
            return column.align ? `text-${column.align}` : "";
        },
        onSearch(event) {
            const query = event.target.value;
        },
        removeFilter(filter) {
            delete this.searchAdvanced[filter.real_key];

            this.fetchData();
        },
    },
    mounted() {
        this.fetchData();
    },
};
</script>
