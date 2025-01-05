<script setup>
import Navbar from "@/shared/template/Public/Navbar.vue";
</script>

<template>
    <v-app id="inspire">
        <Navbar />

        <v-main>
            <v-container>
                <slot></slot>
            </v-container>
        </v-main>
    </v-app>
</template>
