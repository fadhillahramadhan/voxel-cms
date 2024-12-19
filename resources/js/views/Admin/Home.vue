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
                        class="btn btn-outline-danger me-2 btn-xs"
                    >
                        Hapus
                    </button>
                    <button
                        @click="testData(selectedIDs)"
                        class="btn btn-outline-primary me-2 btn-xs"
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
            table: {
                title: "List Users",
                searchTitle: "Search User",
                url: "/admin/users",
                selectID: "id",
                columns: [
                    {
                        key: "name",
                        label: "Name",
                        align: "left",
                        sort: true,
                        type: "text",
                    },
                    {
                        key: "email",
                        label: "Email",
                        align: "left",
                        sort: true,
                        type: "text",
                    },
                    {
                        key: "created_at",
                        label: "Created At",
                        align: "left",
                        sort: true,
                        type: "date",
                    },
                    {
                        key: "action",
                        align: "center",
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
            alert("Edit");
        },
        testData(row) {
            console.log(row);
            alert("Test Data");
        },
    },

    props: {},
    mounted() {},
};
</script>
