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
                    <button
                        class="btn btn-secondary btn-primary waves-effect waves-light"
                        tabindex="0"
                        aria-controls="DataTables_Table_0"
                        type="button"
                        @click="testData(selectedIDs)"
                    >
                        <span
                            ><i
                                class="ri-add-line ri-16px me-md-2 align-baseline"
                            ></i
                            ><span>Create Invoice</span></span
                        >
                    </button>
                </template>

                <template #member_name="{ row }">
                    <a :href="`/admin/users/${row.member_id}`">{{
                        row.member_name
                    }}</a>
                </template>

                <template #action="{ row }">
                    <button @click="edit(row)" class="btn btn-primary btn-xs">
                        Update
                    </button>
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
        },
    },

    props: {},
    mounted() {},
};
</script>
