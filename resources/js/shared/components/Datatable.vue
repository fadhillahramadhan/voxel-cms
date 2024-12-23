<script setup>
import { Head } from "@inertiajs/vue3";
import axios from "axios";
</script>

<template>
    <div class="card full-height-card">
        <!-- Card Header -->
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
                        <span class="input-group-text">
                            <i class="ri-search-line lh-1 ri-20px"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control chat-search-input"
                            placeholder="Search..."
                            @input="onSearch"
                        />
                        <span class="input-group-text">
                            <i class="ri-add-line lh-1 ri-20px clickable"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="row">
            <div class="col-sm-12">
                <div
                    class="justify-content-sm-center align-items-center justify-content-md-end d-flex p-5"
                    id="btn-container"
                >
                    <slot
                        name="buttonAction"
                        :selectedRows="selectedRows"
                        :selectedIDs="selectedIDs"
                    />
                </div>
            </div>
        </div>

        <!-- Table Content -->
        <div class="card-datatable text-nowrap">
            <div class="dataTables_wrapper dt-bootstrap5 no-footer">
                <table
                    class="datatables-ajax table dataTable no-footer cstm-table table-hover mt-3 table-sm"
                >
                    <thead>
                        <tr>
                            <th v-if="config.multipleSelect">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    v-model="selected_all"
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
                            <td v-if="config.multipleSelect">
                                <input
                                    type="checkbox"
                                    v-model="selectedRows[row[config.selectID]]"
                                    class="form-check-input align-self-end clickable"
                                />
                            </td>
                            <td
                                v-for="column in config.columns"
                                :key="column.key"
                                :data-label="column.label"
                                :class="getAlignmentClass(column)"
                            >
                                <template v-if="$slots[column.key]">
                                    <slot :name="column.key" :row="row" />
                                </template>
                                <template v-else>
                                    {{ row[column.key] }}
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
                    <div class="col-sm-12 col-md-6 d-none d-sm-block">
                        <div class="dataTables_length">
                            <label>
                                Show
                                <select
                                    class="form-control form-control-sm"
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
                                </select>
                                entries
                            </label>
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
                                        v-if="
                                            link.value || link.label === '...'
                                        "
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
            results: [],
            pagination: {},
            config: this.tables,
            selectedRows: {},
            selected_all: false,
        };
    },
    computed: {
        selectedIDs() {
            return Object.keys(this.selectedRows).filter(
                (key) => this.selectedRows[key]
            );
        },
    },
    methods: {
        fetchData(page = 1) {
            this.selected_all = false;
            this.selectedRows = {};

            axios
                .get(this.config.url, {
                    params: {
                        limit: this.config.options.currentLimit,
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
        },
        selectAll() {
            this.results.forEach((row) => {
                this.selectedRows[row[this.config.selectID]] =
                    this.selected_all;
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
            // Handle search logic here
            const query = event.target.value;
            console.log("Search query:", query);
        },
    },
    created() {
        this.fetchData();
    },
};
</script>
