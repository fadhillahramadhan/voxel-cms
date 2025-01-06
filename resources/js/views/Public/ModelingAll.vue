<script setup>
import { Head } from "@inertiajs/vue3";
import axios from "axios";
</script>

<template>
    <Head>
        <title>All Models</title>
        <meta name="description" content="My App" />
    </Head>
    <v-row class="py-8">
        <v-col cols="12" md="12">
            <!-- bold -->
            <span class="text-h5 font-weight-bold"
                >Latest Models ({{ modelData.pagination.total }})</span
            >
        </v-col>
        <!-- search bar order by and another things -->
        <v-col cols="12" md="12">
            <v-row>
                <v-col cols="12" md="10">
                    <v-text-field
                        label="Search"
                        v-model="search"
                        outlined
                        @input="getData"
                        dense
                    ></v-text-field>
                    <template v-slot:append>
                        <v-btn icon>
                            <v-icon>mdi-magnify</v-icon>
                        </v-btn>
                    </template>
                </v-col>
                <v-col cols="12" md="2">
                    <v-select
                        label="Order By"
                        outlined
                        dense
                        v-model="selected"
                        :items="options"
                        item-title="text"
                        item-value="value"
                        @update:modelValue="getData"
                    >
                        <template #append>
                            <v-icon>mdi-sort</v-icon>
                        </template>
                    </v-select>
                </v-col>
            </v-row>
        </v-col>

        <!-- 4 4 4 4 with cards -->
        <v-col
            cols="12"
            md="3"
            lg="3"
            v-for="model in modelData.data.results"
            :key="model.id"
        >
            <v-card
                class="mx-auto text-white"
                min-height="200"
                rounded="lg"
                :image="model.image"
                :href="`/modeling/detail/${model.unique_code}`"
            >
                <v-card-title class="font-weight-bold text-right" rounded="sm">
                    <v-chip color="black" class="text-none" dark>
                        <span class="text-white">{{ model.type }}</span>
                    </v-chip>
                </v-card-title>

                <v-card-actions> </v-card-actions>
            </v-card>
            <!-- v-list text title & size -->
            <v-list-item-title class="text-h6 font-weight-bold">
                {{ model.name }}
            </v-list-item-title>
            <v-list-item-subtitle class="text-subtitle-2"
                >by {{ model.author_name }}</v-list-item-subtitle
            >
        </v-col>

        <!-- pagination -->
        <v-col cols="12" md="12">
            <v-pagination
                v-model="modelData.pagination.current_page"
                :length="modelData.pagination.last_page"
                :total-visible="7"
                @click="getData"
            ></v-pagination>
        </v-col>
    </v-row>
</template>

<script>
export default {
    data: () => ({
        selected: null,
        options: [
            {
                text: "Newest",
                value: "DESC",
            },
            {
                text: "Oldest",
                value: "ASC",
            },
        ],
        search: "",
        modelData: {
            data: {
                results: [],
            },
            pagination: {
                total: 0,
                per_page: 0,
                current_page: 1,
                last_page: 0,
                from: 0,
                to: 0,
                links: [],
            },
        },
    }),
    methods: {
        // name[eq]
        // sort[member_name]:ASC
        getData() {
            let url = `/modeling/all?page=${this.modelData.pagination.current_page}&limit=100`;

            if (this.search) {
                url += `&name[substring]=${this.search}`;
            }

            if (this.selected) {
                url += `&sort[created_at]=${this.selected}`;
            }

            try {
                axios.get(url).then((response) => {
                    this.modelData = response.data;
                });
            } catch (error) {
                console.log(error);
            }
        },
    },
    mounted() {
        this.getData();
    },
};
</script>
