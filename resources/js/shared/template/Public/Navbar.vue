<script setup>
import FreeIcon from "@/assets/icons/freeicon.png";
import { ref } from "vue";
</script>

<template>
    <v-app-bar app dense>
        <!-- flex -->
        <img
            :src="FreeIcon"
            width="100"
            height="70"
            alt="Voxel Editor"
            v-if="$vuetify.display.smAndDown"
        />
        <v-toolbar-title
            class="text-h6 font-weight-bold"
            v-if="$vuetify.display.smAndDown"
            >Voxelize</v-toolbar-title
        >

        <!-- Gear button with dropdown -->
        <v-menu
            offset-y
            transition="scale-transition"
            v-if="$vuetify.display.smAndDown"
        >
            <template v-slot:activator="{ props }">
                <v-btn icon v-bind="props">
                    <v-icon>mdi-menu</v-icon>
                </v-btn>
            </template>

            <v-list>
                <!-- user info user and email -->
                <v-list-item
                    prepend-icon="mdi-account"
                    v-if="$page.props.auth.user"
                >
                    <v-list-item-title>
                        {{ $page.props.auth.user.name }}
                    </v-list-item-title>
                    <v-list-item-subtitle class="mb-3">
                        {{ $page.props.auth.user.email }}
                    </v-list-item-subtitle>
                </v-list-item>

                <v-divider></v-divider>
                <v-list-item
                    v-if="$page.props.auth.user"
                    href="/modeling/create"
                    prepend-icon="mdi-plus"
                >
                    <v-list-item-title>Create Model</v-list-item-title>
                </v-list-item>

                <v-list-item
                    v-if="$page.props.auth.user"
                    href="/modeling/my"
                    prepend-icon="mdi-cube"
                >
                    <v-list-item-title>My Model</v-list-item-title>
                </v-list-item>

                <v-divider></v-divider>
                <!-- Home -->
                <v-list-item href="/" prepend-icon="mdi-home">
                    <v-list-item-title>Home</v-list-item-title>
                </v-list-item>
                <!-- about -->
                <v-list-item href="/about" prepend-icon="mdi-information">
                    <v-list-item-title>About</v-list-item-title>
                </v-list-item>

                <v-divider></v-divider>
                <v-list-item
                    v-if="!$page.props.auth.user"
                    href="/login"
                    prepend-icon="mdi-login"
                >
                    <v-list-item-title>Login</v-list-item-title>
                </v-list-item>

                <v-list-item
                    v-if="$page.props.auth.user"
                    href="/logout"
                    prepend-icon="mdi-logout"
                >
                    <v-list-item-title>Logout</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>

        <v-container
            class="d-flex align-center justify-space-between"
            v-if="$vuetify.display.mdAndUp"
        >
            <!-- Logo -->
            <img :src="FreeIcon" width="100" height="70" alt="Voxel Editor" />

            <!-- Title -->
            <v-toolbar-title class="text-h6 font-weight-bold">
                Voxelize
            </v-toolbar-title>

            <!-- Navigation Links for larger screens -->
            <v-btn-group v-if="$vuetify.display.mdAndUp">
                <v-btn text href="/">Home</v-btn>
                <v-btn text href="/about">About</v-btn>
                <v-btn text href="/modeling/my" v-if="$page.props.auth.user">
                    My Projects
                </v-btn>
            </v-btn-group>

            <v-spacer></v-spacer>

            <!-- Avatar and actions for larger screens -->
            <v-menu
                offset-y
                transition="scale-transition"
                v-if="$vuetify.display.mdAndUp"
            >
                <template v-slot:activator="{ props }">
                    <!-- <v-avatar
                        v-if="$page.props.auth.user"
                        :size="40"
                        class="ml-2"
                        :image="$page.props.auth.user.image"
                        v-bind="props"
                    ></v-avatar> -->
                    <v-btn icon v-bind="props">
                        <v-avatar
                            v-if="$page.props.auth.user"
                            :size="40"
                            :image="$page.props.auth.user.image"
                        ></v-avatar>
                    </v-btn>
                </template>

                <v-list>
                    <!-- user info name and email -->
                    <v-list-item prepend-icon="mdi-account">
                        <v-list-item-title>
                            {{ $page.props.auth.user.name }}
                        </v-list-item-title>
                        <v-list-item-subtitle class="mb-3">
                            {{ $page.props.auth.user.email }}
                        </v-list-item-subtitle>
                    </v-list-item>
                    <v-divider></v-divider>
                    <v-list-item
                        v-if="$page.props.auth.user"
                        href="/modeling/my"
                        prepend-icon="mdi-cube"
                    >
                        <v-list-item-title>My Projects</v-list-item-title>
                    </v-list-item>

                    <v-list-item
                        v-if="$page.props.auth.user"
                        href="/modeling/create"
                        prepend-icon="mdi-plus"
                    >
                        <v-list-item-title>Create Model</v-list-item-title>
                    </v-list-item>

                    <v-divider></v-divider>
                    <v-list-item
                        v-if="$page.props.auth.user"
                        href="/logout"
                        prepend-icon="mdi-logout"
                    >
                        <v-list-item-title>Logout</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>

            <!-- Sign In button for larger screens -->
            <v-btn
                v-if="!$page.props.auth.user && $vuetify.display.mdAndUp"
                class="text-none text-subtitle-1"
                color="primary"
                variant="flat"
                href="/login"
                rounded="xl"
                prepend-icon="mdi-account"
            >
                Sign In
            </v-btn>
        </v-container>
    </v-app-bar>
</template>

<script>
export default {
    setup() {
        const menu = ref(false);
        return {
            menu,
        };
    },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Barlow&family=Dancing+Script&family=Inter&family=Mulish:ital,wght@1,200&family=Pixelify+Sans:wght@400..700&family=Poppins:wght@200&family=Roboto:ital,wght@0,400;1,100&family=Satisfy&display=swap");

/* give pixelify to title */
.v-toolbar-title {
    font-family: "Pixelify Sans", sans-serif;
    /* COLOR AND SHADOW PINK GLITCHY */
    color: #d513d5ff;
    /* a bit shadow */
    text-shadow: 2px 2px 2px #000000;
}

/* Ensure full width for mobile screens */
.v-app-bar {
    width: 100%;
}

/* Adjust avatar positioning */
.v-avatar {
    margin-left: auto;
}
</style>
