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
                        @click="testData(selectedIDs)"
                        class="btn btn-danger me-2 btn-xs"
                    >
                        Hapus
                    </button>
                    <!-- Tambah -->
                    <a
                        href="/admin/users/create"
                        class="btn btn-primary btn-xs"
                    >
                        Tambah
                    </a>
                </template>

                <template #member_name="{ row }">
                    <a :href="`/admin/users/${row.member_id}`">{{
                        row.member_name
                    }}</a>
                </template>

                <template #action="{ row }">
                    <!-- <i
                        @click="edit(row)"
                        class="ri-edit-line text-primary cursor-pointer"
                    ></i> -->
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
                title: "List Users",
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
