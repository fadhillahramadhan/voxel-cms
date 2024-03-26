<script setup>
import NavGroup from '@/shared/template/NavGroup.vue'
import NavItem from '@/shared/template/NavItem.vue'
import logo from '@/assets/images/logos/logo-dark.svg';
import sidebarItemVO from '@/shared/template/sidebarItemVO.js';
import sidebarItemAdmin from '@/shared/template/sidebarItemAdmin.js';


import sidebarItemTemplate from '@/shared/template/sidebarItemTemplate.js';

let sidebarMenu = [];

// if route start with template then use template sidebar
if (window.location.pathname.startsWith('/template')) {
    sidebarMenu = sidebarItemTemplate;
}

if (window.location.pathname.startsWith('/vo')) {
    sidebarMenu = sidebarItemVO;
}

if(window.location.pathname.startsWith('/admin')){
    sidebarMenu = sidebarItemAdmin;
}


</script>

<template>
   <Head>
    <title>My App</title>
    <meta name="description" content="My App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </Head>
  <v-navigation-drawer left app class="leftSidebar ml-sm-5 mt-sm-5 bg-containerBg" elevation="10"
        width="270">
        <div class="pa-5 pl-4 ">
          <img :src="logo" alt="logo" class="mb-5" />
        </div>
      <perfect-scrollbar class="scrollnavbar bg-containerBg overflow-y-hidden">
            <v-list class="py-4 px-4 bg-containerBg">
                <template v-for="(item, i) in sidebarMenu">
                    <NavGroup :item="item" v-if="item.header" :key="item.title" />
                    <NavItem :item="item" v-else class="leftPadding" />
                </template>
            </v-list>
          
      </perfect-scrollbar>
    </v-navigation-drawer>
</template>


<style>
.active {
    background-color: #e0e0e0 !important
}
</style>

