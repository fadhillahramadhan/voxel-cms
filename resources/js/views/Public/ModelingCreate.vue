<script setup>
import axios from "axios";
import FreeIcon from "@/assets/icons/freeicon.png";
</script>
<template>
    <v-container>
        <v-row>
            <v-col cols="12" md="3" lg="3"> </v-col>
            <v-col cols="12" md="6" lg="6">
                <v-card rounded="lg">
                    <!--icon, Log in to your account, welcome back,form, rememberme, button  -->
                    <v-card-title class="text-center mb-2">
                        <div class="d-flex justify-center mb-5">
                            <div class="d-flex align-center text-left">
                                <img
                                    :src="FreeIcon"
                                    width="100"
                                    height="70"
                                    alt="Voxel Editor"
                                />
                                <v-toolbar-title
                                    class="text-h5 font-weight-bold"
                                    >Voxelize</v-toolbar-title
                                >
                            </div>
                        </div>
                        <h2 class="text-h5 font-weight-bold">
                            Create a new model
                        </h2>
                        <p class="text-subtitle-2">
                            Welcome back, please enter your details
                        </p>
                    </v-card-title>
                    <!-- form -->
                    <v-card-text>
                        <v-form @submit.prevent="register">
                            <!-- name -->
                            <v-text-field
                                v-model="form.name"
                                :error-messages="errors.name"
                                label="Please enter the name of the model e.g. Car"
                                outlined
                                dense
                                required
                                @enter="register"
                            ></v-text-field>
                            <!-- type -->
                            <v-text-field
                                v-model="form.type"
                                :error-messages="errors.type"
                                label="Please enter the type of the model e.g. Vehicle"
                                outlined
                                dense
                                required
                                @enter="register"
                            ></v-text-field>

                            <v-select
                                v-model="form.is_published"
                                :error-messages="errors.is_published"
                                label="Is this model published for public use?"
                                outlined
                                dense
                                required
                                :items="is_published_options"
                                item-title="text"
                                item-value="value"
                            >
                            </v-select>

                            <!-- descriptions -->
                            <v-textarea
                                v-model="form.description"
                                :error-messages="errors.description"
                                label="Please enter the description of the model"
                                outlined
                                dense
                                required
                                @enter="register"
                            ></v-textarea>

                            <!-- is published or not option -->

                            <!-- submit -->
                            <v-btn color="primary" dark block type="submit">
                                Create Model
                            </v-btn>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-col>
            <v-col cols="12" md="3" lg="3"> </v-col>
        </v-row>
    </v-container>
</template>

<script>
import { ref } from "vue";

export default {
    data: () => ({
        form: {
            name: "",
            type: "",
        },
        errors: {
            name: "",
            type: "",
        },
        is_published_options: [
            { text: "Yes", value: 1 },
            { text: "No", value: 0 },
        ],
    }),
    methods: {
        async register() {
            try {
                await axios
                    .post("/modeling/save", this.form)
                    .then((response) => {
                        let data = response.data.data;
                        window.location.href = data.engine_url;
                    });
            } catch (error) {
                if (
                    error &&
                    error.response &&
                    error.response.data &&
                    error.response.data.error === "validation"
                ) {
                    this.errors = error.response.data.data;
                } else {
                    this.errors = {
                        name: [error.response.data.message],
                    };
                }

                setTimeout(() => {
                    this.errors = {};
                }, 5000);
            }
        },
    },
};
</script>
