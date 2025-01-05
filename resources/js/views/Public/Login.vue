<script setup>
import Icon from "@/assets/icons/icons.png";
</script>
<template>
    <v-container>
        <v-row>
            <v-col cols="12" md="4" lg="4"> </v-col>
            <v-col cols="12" md="4" lg="4">
                <v-card rounded="lg">
                    <!--icon, Log in to your account, welcome back,form, rememberme, button  -->
                    <v-card-title class="text-center mb-2">
                        <img
                            :src="Icon"
                            width="300"
                            height="300"
                            style="margin-top: -100px; margin-bottom: -90px"
                        ></img>
                        <h2 class="text-h5 font-weight-bold">
                            Log in to your account
                        </h2>
                        <p class="text-subtitle-2">Welcome back, please enter your details</p>
                    </v-card-title>
                    <!-- form -->
                    <v-card-text>
                        <v-form>
                            <v-text-field
                                v-model="email"
                                label="Email"
                                outlined
                                dense
                                required
                            ></v-text-field>
                            <v-text-field
                                v-model="password"
                                label="Password"
                                outlined
                                dense
                                required
                                type="password"
                            ></v-text-field>
                            <v-checkbox
                                label="Remember me"
                                dense
                                class="text-subtitle-2"
                            ></v-checkbox>
                        </v-form>

                        <!-- button -->
                        <v-btn
                            color="primary"
                            block
                            rounded
                            :loading="loading"
                            @click="login"
                            class="text-none"
                        >
                            Log in
                        </v-btn>
                        <div class="text-left mt-4 mb-5">
                            Dont have an account?
                            <a href="/register">Sign up</a>
                        </div>
                        <!-- dont have an account?   -->
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
        email: "",
        password: "",
        loading: false,
    }),
    methods: {
      
    },
};
</script>
