<!-- E:\Project\Javascript\Voxelize\VoxelEditorCMS\resources\assets\icons\icons.png -->

<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="My App" />
    </Head>
    <v-row class="py-8">
        <v-col cols="12" md="12">
            <!-- bold -->
            <span class="text-h5 font-weight-bold">Latest Models (416) </span>
        </v-col>
        <!-- search bar order by and another things -->
        <v-col cols="12" md="12">
            <v-row>
                <v-col cols="12" md="10">
                    <v-text-field label="Search" outlined dense></v-text-field>
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
                    >
                        <template #append>
                            <v-icon>mdi-sort</v-icon>
                        </template>
                    </v-select>
                </v-col>
            </v-row>
        </v-col>

        <!-- 4 4 4 4 with cards -->
        <v-col cols="12" md="3" lg="3">
            <v-card
                class="mx-auto text-white"
                min-height="200"
                rounded="lg"
                image="https://vazxmixjsiawhamofees.supabase.co/storage/v1/object/public/models/ruins/thumbnail.png"
            >
                <!-- image  -->
                <v-card-title class="font-weight-bold text-right" rounded="sm">
                    <!-- text with background -->
                    <v-chip color="black" class="text-none" dark>
                        <!-- text white -->
                        <span class="text-white">Ruins</span>
                    </v-chip>
                </v-card-title>

                <v-card-actions> </v-card-actions>
            </v-card>
            <!-- v-list text title & size -->
            <v-list-item-title class="text-h6 font-weight-bold">
                Ruins
            </v-list-item-title>
            <v-list-item-subtitle class="text-subtitle-2"
                >by Voxel Editor</v-list-item-subtitle
            >
        </v-col>
    </v-row>
</template>

<script>
export default {
    data: () => ({
        links: ["Dashboard", "Messages", "Profile", "Updates"],
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
    }),
};
</script>
