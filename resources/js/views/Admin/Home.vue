<script setup>
import { Head } from "@inertiajs/vue3";
import Datatable from "@/shared/components/Datatable.vue";
</script>

<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="My App" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </Head>

    <div class="row">
        <div class="col-12">
            <Datatable :tables="table">
                <!-- slot action -->
                <template #buttonAction="{ selectedIDs }">
                    <div class="card-header-elements ms-sm-auto">
                        <div class="btn-group">
                            <button
                                type="button"
                                class="btn btn-secondary buttons-collection dropdown-toggle btn-outline-secondary waves-effect waves-light"
                                data-bs-toggle="dropdown"
                                data-bs-reference="parent"
                                aria-expanded="false"
                            >
                                <span class="d-flex align-items-center">
                                    Aksi
                                </span>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a
                                    class="dt-button dropdown-item buttons-print"
                                    tabindex="0"
                                    aria-controls="DataTables_Table_0"
                                    @click="testData(selectedIDs)"
                                    href="#"
                                    ><span
                                        ><i class="ri-printer-line me-1"></i
                                        >Print</span
                                    ></a
                                >
                            </div>
                        </div>
                    </div>
                </template>

                <template #member_name="{ row }">
                    <a :href="`/admin/users/${row.member_id}`">{{
                        row.member_name
                    }}</a>
                </template>

                <template #action="{ row }">
                    <div class="dropdown">
                        <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="ri-more-2-line"></i>
                        </button>
                        <div class="dropdown-menu" style="">
                            <a
                                class="dropdown-item waves-effect"
                                href="javascript:void(0);"
                                @click="edit(row)"
                                ><i class="ri-pencil-line me-1"></i> Edit</a
                            >
                            <a
                                class="dropdown-item waves-effect"
                                href="javascript:void(0);"
                                ><i class="ri-delete-bin-7-line me-1"></i>
                                Delete</a
                            >
                        </div>
                    </div>
                </template>
            </Datatable>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            table: {
                selectID: "member_id",
                searchTitle: "Search User",
                url: "datatable",
                columns: [
                    {
                        label: "Nama Lengkap",
                        key: "member_name",
                        align: "left",
                        sort: true,
                        type: "text",
                    },
                    {
                        label: "Email",
                        key: "member_email",
                        align: "left",
                        sort: true,
                        type: "text",
                    },
                    {
                        label: "No. HP",
                        key: "member_mobile_phone",
                        align: "left",
                        sort: true,
                        type: "text",
                    },
                    {
                        label: "Dibuat Dari",
                        key: "member_activation_datetime",
                        align: "left",
                        sort: true,
                        type: "date",
                    },
                    {
                        label: "Aksi",
                        key: "action",
                        align: "center",
                        sort: false,
                        type: "action",
                    },
                ],
                multipleSelect: true,
                options: {
                    limit: [10, 25, 50, 100],
                    currentLimit: 10,
                },
            },
        };
    },
    methods: {
        edit(row) {
            alert(JSON.stringify(row));
        },
        testData(row) {
            alert(JSON.stringify(row));
            // trigger fetchData from Datatable.vue
            // this.$refs.datatable.fetchData();
        },
    },

    props: {},
    mounted() {},
};
</script>
