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
            <Datatable :tables="tablesUsers">
                <!-- slot action -->
                <template #buttonAction="{ selectedRows }">
                    <button
                        @click="testData(selectedRows)"
                        class="btn btn-outline-danger me-2"
                    >
                        Hapus
                    </button>
                    <button
                        @click="testData(selectedRows)"
                        class="btn btn-outline-primary"
                    >
                        Edit
                    </button>
                </template>

                <!-- alter name -->
                <template #name="{ row }">
                    <a :href="`/admin/users/${row.id}`">{{ row.name }}</a>
                </template>

                <template #action="{ row }">
                    <i
                        @click="edit(row)"
                        class="ri-edit-line text-primary cursor-pointer"
                    ></i>
                </template>
            </Datatable>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tablesUsers: {
                title: "List Users",
                searchTitle: "Search User",
                url: "/admin/users",
                selectID: "id",
                columns: [
                    {
                        label: "#",
                        key: "id",
                        sort: false,
                        type: "text",
                    },
                    {
                        key: "name",
                        label: "Name",
                        sort: true,
                        type: "text",
                    },
                    {
                        key: "email",
                        label: "Email",
                        sort: true,
                        type: "text",
                    },
                    {
                        key: "created_at",
                        label: "Created At",
                        sort: true,
                        type: "date",
                    },
                    {
                        key: "action",
                        label: "#",
                        sort: false,
                    },
                ],
                multipleSelect: true,
                options: {
                    limit: [10, 25, 50, 100],
                    currentLimit: 25,
                },
            },
        };
    },
    methods: {
        edit(row) {
            console.log(row);
        },
        testData(row) {
            console.log(row);
        },
    },

    props: {},
    mounted() {},
};
</script>
