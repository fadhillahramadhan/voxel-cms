<template>
    <v-container class="py-5">
        <v-row justify="center">
            <v-col cols="12" md="8">
                <v-card elevation="3" class="pa-4">
                    <v-row>
                        <!-- 3D Model Viewer -->
                        <v-col cols="12" md="6" class="d-flex justify-center">
                            <v-img
                                :src="model.image"
                                alt="Model Image"
                                max-height="200"
                                aspect-ratio="1"
                                class="rounded elevation-1"
                            ></v-img>
                            <!-- Replace with Three.js or any 3D viewer integration -->
                        </v-col>

                        <!-- Model Information -->
                        <v-col cols="12" md="6">
                            <v-card-title class="text-h4 mb-3 pa-0 ma-0">{{
                                model.name
                            }}</v-card-title>
                            <v-card-subtitle
                                class="mb-3 pa-0 ma-0 text-uppercase"
                                ><strong>Type:</strong> {{ model.type }}
                            </v-card-subtitle>
                            <p>
                                {{
                                    model.description ||
                                    "No description available for this model."
                                }}
                            </p>

                            <v-row class="mt-4">
                                <v-col cols="6">
                                    <strong>Created At:</strong> <br />
                                    {{ formatDate(model.created_at) }}
                                </v-col>
                                <v-col cols="6">
                                    <strong>Updated At:</strong> <br />
                                    {{ formatDate(model.updated_at) }}
                                </v-col>
                            </v-row>

                            <!-- Save and Publish Status -->
                            <v-row class="mt-3">
                                <v-col>
                                    <v-chip
                                        :color="
                                            model.is_saved ? 'green' : 'red'
                                        "
                                        dark
                                        class="mr-2"
                                    >
                                        {{
                                            model.is_saved
                                                ? "Saved"
                                                : "Not Saved"
                                        }}
                                    </v-chip>
                                    <v-chip
                                        :color="
                                            model.is_published ? 'blue' : 'grey'
                                        "
                                        dark
                                    >
                                        {{
                                            model.is_published
                                                ? "Published"
                                                : "Not Published"
                                        }}
                                    </v-chip>
                                </v-col>
                            </v-row>
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>

            <!-- Call-to-Actions -->
            <v-col cols="12" md="8" class="d-flex justify-center mt-4">
                <v-btn
                    color="primary"
                    class="mr-3"
                    v-if="
                        $page.props.auth.user &&
                        $page.props.auth.user.id == model.user_id
                    "
                    :href="engine_url"
                    target="_blank"
                >
                    Edit Model
                </v-btn>

                <!-- view model -->
                <v-btn
                    color="primary"
                    class="mr-3"
                    :href="engine_url"
                    target="_blank"
                    v-if="
                        !$page.props.auth.user ||
                        ($page.props.auth.user &&
                            $page.props.auth.user.id != model.user_id)
                    "
                >
                    View Model
                </v-btn>

                <v-btn
                    color="error"
                    @click="onDelete"
                    v-if="
                        $page.props.auth.user &&
                        $page.props.auth.user.id == model.user_id
                    "
                >
                    Delete Model
                </v-btn>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "ModelDetails",
    props: {
        model: {
            type: Object,
            required: true,
        },
        engine_url: {
            type: String,
            required: true,
        },
    },
    methods: {
        formatDate(date) {
            return date ? new Date(date).toLocaleString() : "N/A";
        },
        onEdit() {
            alert("Edit functionality to be implemented!");
        },
        onDownload() {
            alert("Download functionality to be implemented!");
        },
        onDelete() {
            alert("Delete functionality to be implemented!");
        },
    },
};
</script>

<style scoped>
p {
    margin-bottom: 1rem;
}

.v-img {
    border-radius: 8px;
}
</style>
