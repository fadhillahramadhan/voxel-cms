<script setup lang="ts">
import logo from '@/assets/images/logos/logo-dark.svg';
</script>
<template>
    <div class="logo">
        <RouterLink to="/">
            <img :src="logo" alt="home" />
        </RouterLink>
    </div>
</template>
