<script setup>
import Icon from "@/assets/icons/icons.png";
</script>

<template>
    <v-app-bar app dense>
        <v-container class="d-flex align-center">
            <!-- Logo -->
            <!-- image -->
            <v-img
                :src="Icon"
                max-width="250px"
                style="margin-top: -10px; margin-right: -30px"
            ></v-img>

            <!-- Navigation Links -->
            <v-btn-group>
                <v-btn text href="/">Home</v-btn>
                <!-- authors -->
                <v-btn text href="/authors">Authors</v-btn>
            </v-btn-group>

            <!-- Right Actions -->
            <v-spacer></v-spacer>

            <v-btn
                class="text-none text-subtitle-1"
                color="primary"
                variant="flat"
                href="/login"
            >
                Sign In
            </v-btn>
        </v-container>
    </v-app-bar>
</template>
