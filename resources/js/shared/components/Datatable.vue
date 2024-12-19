<script setup>
import { Head } from "@inertiajs/vue3";
import axios from "axios";

// props get data from parent component
</script>

<template>
    <div class="card full-height-card">
        <div class="card-header">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h5 class="text-md-start text-center">
                        {{ config.title }}
                    </h5>
                </div>
                <div class="col-12 col-lg-4"></div>
                <div class="col-12 col-lg-4">
                    <div
                        class="flex-grow-1 input-group input-group-sm input-group-merge rounded-pill"
                    >
                        <span class="input-group-text" id="basic-addon-search31"
                            ><i class="ri-search-line lh-1 ri-20px"></i
                        ></span>
                        <input
                            type="text"
                            class="form-control chat-search-input"
                            placeholder="Search..."
                            aria-label="Search..."
                            aria-describedby="basic-addon-search31"
                        />
                        <!-- add button -->
                        <span
                            class="input-group-text"
                            id="basic-addon-search31"
                        >
                            <i class="ri-add-line lh-1 ri-20px clickable"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- action button -->
            <div class="col-sm-12">
                <!-- slots action button -->
                <div
                    class="justify-content-sm-center align-items-center justify-content-md-end d-flex p-5"
                >
                    <slot
                        name="buttonAction"
                        v-bind="{ selectedRows, selectedIDs }"
                    />
                </div>
            </div>
        </div>

        <div class="card-datatable text-nowrap">
            <div
                id="DataTables_Table_0_wrapper"
                class="dataTables_wrapper dt-bootstrap5 no-footer"
            >
                <!-- Table -->
                <table
                    class="datatables-ajax table dataTable no-footer cstm-table table-hover mt-3 table-sm"
                    id="DataTables_Table_0"
                    aria-describedby="DataTables_Table_0_info"
                >
                    <thead>
                        <tr>
                            <th v-if="config.multipleSelect">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    @change="selectAll($event)"
                                />
                            </th>

                            <th
                                v-for="column in config.columns"
                                :data-label="column.label"
                                :key="column.key"
                                :class="[
                                    column.sort
                                        ? `sorting sorting_${column.sorting}`
                                        : '',
                                    column.align,
                                ]"
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
                            :key="row.id"
                            class="tb-responsive"
                        >
                            <td v-if="config.multipleSelect">
                                <!-- if sm then show label  pilih -->
                                <input
                                    type="checkbox"
                                    :value="row[config.selectID]"
                                    @click="selectRow($event, row)"
                                    class="form-check-input align-self-end clickable"
                                />
                            </td>
                            <td
                                v-for="(column, index) in config.columns"
                                :key="column.key"
                                :data-label="column.label"
                                :class="[column.align]"
                                @click="selectRow($event, row)"
                            >
                                <!-- check if there is a slot with the column key name -->
                                <template v-if="$slots[column.key]">
                                    <slot :name="column.key" v-bind="{ row }" />
                                </template>

                                <template v-else>
                                    {{ row[column.key] }}
                                </template>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 d-none d-sm-block">
                        <div
                            class="dataTables_length"
                            id="DataTables_Table_0_length"
                        >
                            <label>
                                Show
                                <select
                                    name="DataTables_Table_0_length"
                                    aria-controls="DataTables_Table_0"
                                    class="form-control form-control-sm"
                                    :value="config.options.currentLimit"
                                >
                                    <option
                                        v-for="option in config.options.limit"
                                    >
                                        {{ option }}
                                    </option>
                                </select>
                                entries
                            </label>
                        </div>
                    </div>

                    <div
                        class="col-sm-12 col-md-6 d-flex justify-content-sm-center justify-content-md-end align-items-center"
                        id="btn-container"
                    >
                        <nav aria-label="Page navigation">
                            <ul
                                class="pagination pagination-rounded pagination-outline-primary"
                            >
                                <li class="page-item first">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        ><i
                                            class="tf-icon ri-skip-back-mini-line ri-20px"
                                        ></i
                                    ></a>
                                </li>
                                <li class="page-item prev">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        ><i
                                            class="tf-icon ri-arrow-left-s-line ri-20px"
                                        ></i
                                    ></a>
                                </li>
                                <li class="page-item">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        >1</a
                                    >
                                </li>
                                <li class="page-item">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        >2</a
                                    >
                                </li>
                                <li class="page-item active">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        >3</a
                                    >
                                </li>

                                <li class="page-item next">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        ><i
                                            class="tf-icon ri-arrow-right-s-line ri-20px"
                                        ></i
                                    ></a>
                                </li>
                                <li class="page-item last">
                                    <a
                                        class="page-link waves-effect"
                                        href="javascript:void(0);"
                                        ><i
                                            class="tf-icon ri-skip-forward-mini-line ri-20px"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        tables: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            results: [
                // fake data for testing
                {
                    id: 1,
                    name: "Mark",
                    email: "fadhillahramadhan01@gmail.com ",
                    created_at: "2021-10-10",
                },
                {
                    id: 2,
                    name: "Jacob",
                    email: "test@gmail.com",
                    created_at: "2021-10-10",
                },
            ],
            config: this.tables,
            selectedRows: [],
            selectedIDs: [],
        };
    },
    methods: {
        sort(key) {
            const column = this.config.columns.find(
                (column) => column.key === key
            );
            if (column.sort) {
                column.sorting = column.sorting === "asc" ? "desc" : "asc";
            }
        },
        selectAll(event) {
            this.selectedRows = event.target.checked
                ? this.results.map((row) => row[this.config.selectID])
                : [];
        },
        selectRow(event, row) {
            console.log(row);
            // just push the entire row object
            if (event.target.checked) {
                this.selectedRows.push(row);
                this.selectedIDs.push(row[this.config.selectID]);
            } else {
                this.selectedRows = this.selectedRows.filter(
                    (selectedRow) =>
                        selectedRow[this.config.selectID] !==
                        row[this.config.selectID]
                );
                this.selectedIDs = this.selectedIDs.filter(
                    (selectedID) => selectedID !== row[this.config.selectID]
                );
            }
        },
    },

    created() {
        this.config.columns.forEach((column) => {
            if (column.sort) {
                column.sorting = "asc";
            }
        });
    },
};
</script>

<style scoped>
@media screen and (max-width: 600px) {
    /* Hide the table header and display rows as blocks */
    .cstm-table thead {
        display: none;
    }

    .cstm-table tr {
        display: block;
        margin-bottom: 0.625em;
    }

    /* Style for table cells on mobile */
    .cstm-table td {
        display: block;
        font-size: 0.8em;
        padding: 0.5rem !important;
        text-align: left !important;
    }

    /* Add column label before the content of each cell */
    .cstm-table td::before {
        content: attr(data-label);
        font-weight: bold;
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.5em;
    }

    /* Remove bottom border for the last cell */
    .cstm-table td:last-child {
        border-bottom: 1px solid #ddd;
    }

    /* Adjust the pagination on small screens */
    #DataTables_Table_0_paginate {
        justify-content: center !important;
        margin-top: 1rem !important;
    }

    /* Make pagination buttons full-width on small screens */
    #btn-container .btn {
        width: 100%;
        height: 3em;
    }

    /* Enable horizontal scrolling for large tables */
    .table-responsive {
        overflow-x: auto;
    }

    html:not([dir="rtl"])
        div.card-datatable
        table.dataTable
        tbody
        td:first-child {
        padding-left: 0rem;
        padding-right: 0rem;
    }

    .clickable {
        cursor: pointer;
    }
}
</style>
