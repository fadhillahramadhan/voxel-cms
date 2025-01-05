<script setup>
import Icon from "@/assets/icons/icons.png";
import axios from "axios";
</script>
<template>
    <v-container>
        <v-row>
            <v-col cols="12" md="4" lg="3"> </v-col>
            <v-col cols="12" md="4" lg="6">
                <v-card rounded="lg">
                    <!--icon, Log in to your account, welcome back,form, rememberme, button  -->
                    <v-card-title class="text-center mb-2">
                        <h2 class="text-h5 font-weight-bold">
                            Create a new model
                        </h2>
                        <p class="text-subtitle-2">Please enter your details</p>
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
                            ></v-text-field>
                            <!-- type -->
                            <v-text-field
                                v-model="form.type"
                                :error-messages="errors.type"
                                label="Please enter the type of the model e.g. Vehicle"
                                outlined
                                dense
                                required
                            ></v-text-field>
                            <!-- submit -->
                            <v-btn color="primary" dark block type="submit">
                                Create Model
                            </v-btn>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-col>
            <v-col cols="12" md="4" lg="3"> </v-col>
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
                    this.errorLogin = true;
                    this.errors = {};
                }

                // Handle Error
                if (
                    error &&
                    error.response &&
                    error.response.data &&
                    error.response.data.message
                ) {
                    this.errorLogin = error.response.data.message;
                }

                setTimeout(() => {
                    this.errorLogin = false;
                    this.errors = {};
                }, 5000);
            }
        },
    },
};
</script>
