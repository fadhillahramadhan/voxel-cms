<template>
    <v-container class="py-5">
        <v-row justify="center">
            <v-col
                cols="12"
                md="12"
                class="d-flex justify-center mt-2 pa-0 ma-0"
            >
                <!-- iframe -->
                <iframe
                    width="100%"
                    height="400"
                    :src="engine_url + '&a=v'"
                    frameborder="0"
                    allow="autoplay; fullscreen; vr"
                    allowfullscreen
                    style="display: none"
                ></iframe>
                <!-- Replace with Three.js or any 3D viewer integration -->
            </v-col>
            <v-col
                cols="12"
                md="12"
                class="d-flex justify-center mt-4 pa-0 ma-0"
            >
                <!-- Model detail & Action -->
                <v-card
                    class="elevation-2 pa-0 ma-0"
                    style="
                        width: 100% !important;
                        height: fit-content !important;
                    "
                >
                    <v-card-title class="text-h5">
                        {{ model.name }}
                    </v-card-title>
                    <v-chip class="mx-2">{{ model.type }}</v-chip>

                    <v-card-text>
                        <p>
                            {{ model.description }}
                        </p>
                        <!-- author_name -->
                        <p><strong>Author:</strong> {{ model.author_name }}</p>
                        <!-- type badge or smt -->
                    </v-card-text>
                    <v-card-actions>
                        <v-btn
                            color="primary"
                            class="mr-3"
                            v-if="
                                $page.props.auth.user &&
                                $page.props.auth.user.id == model.user_id
                            "
                            :href="engine_url + '&a=c'"
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
                    </v-card-actions>
                </v-card>
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
    mounted() {
        // Initialize 3D viewer
        // Replace with Three.js or any 3D viewer integration
        // 1 second delay to allow iframe to load
        setTimeout(() => {
            document.querySelector("iframe").style.display = "block";
        }, 1000);
    },
    created() {
        setTimeout(() => {
            document.querySelector("iframe").style.display = "block";
        }, 1000);
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
