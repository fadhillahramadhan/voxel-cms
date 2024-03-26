<script setup>
import { onMounted, onBeforeUnmount, ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Sidebar from '@/shared/template/Sidebar.vue';
import Navbar from '@/shared/template/Navbar.vue';
</script>

<template>
  <Head>
    <title>My App</title>
    <meta name="description" content="My App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </Head>
  <v-app>
    <Sidebar :drawer="drawer" :update-drawer="updateDrawer" />
    <Navbar :drawer="drawer" :update-drawer="updateDrawer" />
    <v-main>
        <v-container fluid class="page-wrapper bg-background px-sm-5 px-4  pt-12 rounded-xl">
            <div class="maxWidth">
                <slot></slot>
            </div>
        </v-container>
    </v-main>
  </v-app>
</template>

