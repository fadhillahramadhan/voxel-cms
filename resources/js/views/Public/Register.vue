<script setup>
import axios from "axios";
import FreeIcon from "@/assets/icons/freeicon.png";
</script>
<template>
    <v-container>
        <v-row>
            <v-col cols="12" md="4" lg="4"> </v-col>
            <v-col cols="12" md="4" lg="4">
                <v-card rounded="lg">
                    <!--icon, Log in to your account, welcome back,form, rememberme, button  -->
                    <v-card-title class="text-center mb-2">
                        <div class="d-flex justify-center mb-5">
                            <div
                                class="d-flex align-center text-left"
                                style="width: 70%"
                            >
                                <img
                                    :src="FreeIcon"
                                    width="100"
                                    height="70"
                                    alt="Voxel Editor"
                                />
                                <v-toolbar-title
                                    class="text-h6 font-weight-bold"
                                    >Voxelize</v-toolbar-title
                                >
                            </div>
                        </div>
                        <h2 class="text-h5 font-weight-bold">
                            Log in to your account
                        </h2>
                        <p class="text-subtitle-2">
                            Welcome back, please enter your details
                        </p>
                    </v-card-title>
                    <!-- form -->
                    <!-- Form Register  Name, Email, Password, Confirm Password -->
                    <v-card-text>
                        <v-form>
                            <v-text-field
                                v-model="form.name"
                                :error-messages="errors.name"
                                label="Name"
                                outlined
                                dense
                                required
                                @keyup.enter="register"
                            ></v-text-field>
                            <v-text-field
                                v-model="form.email"
                                :error-messages="errors.email"
                                label="Email"
                                outlined
                                dense
                                required
                                @keyup.enter="register"
                            ></v-text-field>
                            <v-text-field
                                v-model="form.password"
                                :error-messages="errors.password"
                                label="Password"
                                outlined
                                dense
                                required
                                type="password"
                                @keyup.enter="register"
                            ></v-text-field>
                            <v-text-field
                                v-model="form.confirmPassword"
                                :error-messages="errors.confirmPassword"
                                label="Confirm Password"
                                outlined
                                dense
                                required
                                type="password"
                                @keyup.enter="register"
                            ></v-text-field>
                        </v-form>
                        <!-- button -->
                        <v-btn
                            color="primary"
                            block
                            rounded
                            :loading="loading"
                            @click="register"
                            class="text-none"
                        >
                            Register
                        </v-btn>
                        <div class="text-left mt-4 mb-5">
                            Already have an account?
                            <a href="/login">Log in</a>
                        </div>
                    </v-card-text>
                </v-card>
            </v-col>
            <v-col cols="12" md="4" lg="4"> </v-col>
        </v-row>
    </v-container>
</template>

<script>
import { ref } from "vue";

export default {
    data: () => ({
        form: {
            name: "",
            email: "",
            password: "",
            confirmPassword: "",
        },
        errors: {
            name: "",
            email: "",
            password: "",
            confirmPassword: "",
        },
    }),
    methods: {
        async register() {
            try {
                await axios.post("/register", this.form).then((response) => {
                    this.$inertia.visit("/login");
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
                        email: "",
                        password: "",
                        confirmPassword: "",
                    };
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
