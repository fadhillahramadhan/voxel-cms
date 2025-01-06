<script setup>
import Icon from "@/assets/icons/icons.png";
</script>
<template>
    <v-app-bar app dense>
        <v-container class="d-flex align-center">
            <!-- Logo -->
            <v-img
                :src="Icon"
                :width="$vuetify.display.smAndDown ? '50%' : '70px'"
                class="custom-image"
                style="margin-top: -20px; margin-right: -30px"
            ></v-img>

            <!-- Navigation Links only if md -up -->
            <v-btn-group v-if="$vuetify.display.mdAndUp">
                <v-btn text href="/">Home</v-btn>
                <!-- authors -->
                <!-- <v-btn text href="/authors">Authors</v-btn> -->
                <!-- about -->
                <v-btn text href="/about">About</v-btn>
                <!-- my Project -->
                <v-btn text href="/modeling/my" v-if="$page.props.auth.user">
                    My Projects
                </v-btn>
            </v-btn-group>
            <!-- Right Actions -->
            <v-spacer></v-spacer>

            <!-- create project -->
            <v-btn
                v-if="$page.props.auth.user && $vuetify.display.mdAndUp"
                class="text-none text-subtitle-1"
                color="primary"
                variant="flat"
                href="/modeling/create"
            >
                Create Models
            </v-btn>

            <v-menu offset-y top right transition="scale-transition">
                <template v-slot:activator="{ props }">
                    <v-list
                        lines="three"
                        item-props
                        v-if="$page.props.auth.user"
                        v-bind="props"
                    >
                        <v-list-item
                            v-if="$page.props.auth.user"
                            :prepend-avatar="$page.props.auth.user.image"
                            @click="menu = !menu"
                            class="text-none text-subtitle-1"
                        >
                            <v-list-item-content>
                                <v-list-item-title>
                                    {{ $page.props.auth.user.name }}
                                </v-list-item-title>
                                <!-- subtitle -->
                                <v-list-item-subtitle>
                                    {{ $page.props.auth.user.email }}
                                </v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </template>
                <!-- v-list -->
                <v-list>
                    <v-list-item
                        v-if="$page.props.auth.user"
                        @click="menu = !menu"
                        href="/logout"
                        prepend-icon="mdi-logout"
                    >
                        <v-list-item-title>Logout</v-list-item-title>
                    </v-list-item>

                    <!-- create project -->
                    <!-- my project alos -->
                    <v-list-item
                        v-if="$page.props.auth.user"
                        @click="menu = !menu"
                        href="/modeling/my"
                        prepend-icon="mdi-cube"
                    >
                        <v-list-item-title>My Projects</v-list-item-title>
                    </v-list-item>

                    <v-list-item
                        v-if="$page.props.auth.user"
                        @click="menu = !menu"
                        href="/modeling/create"
                        prepend-icon="mdi-plus"
                    >
                        <v-list-item-title>Create Model</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>
            <!-- v-menu -->

            <v-btn
                v-if="!$page.props.auth.user"
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

<script>
import { ref } from "vue";

export default {
    setup() {
        const menu = ref(false);

        return {
            menu,
        };
    },
};
</script>
