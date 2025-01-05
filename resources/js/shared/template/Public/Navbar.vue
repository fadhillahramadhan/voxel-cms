<script setup>
import Icon from "@/assets/icons/icons.png";

// page
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
                    <!-- Project -->
                    <v-list-item
                        v-if="$page.props.auth.user"
                        @click="menu = !menu"
                        href="/project"
                        prepend-icon="mdi-account"
                    >
                        <v-list-item-title>Project</v-list-item-title>
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
// ddata

export default {
    setup() {
        // data
        const menu = ref(false);

        return {
            menu,
        };
    },
    data: () => ({}),
};
</script>
