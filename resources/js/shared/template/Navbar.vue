<script setup>
import { Menu2Icon, BellRingingIcon } from 'vue-tabler-icons';
import { UserIcon, MailIcon, ListCheckIcon } from 'vue-tabler-icons';
</script>
<template>
    <div class="container verticalLayout">
        <div class="maxWidth">
            <v-app-bar elevation="0" height="70">
                <div class="d-flex align-center justify-space-between w-100">
                    <div>
                        <v-btn class="hidden-lg-and-up text-muted" @click="sDrawer = !sDrawer" icon
                            variant="flat" size="small">
                            <Menu2Icon size="20" stroke-width="1.5" />
                        </v-btn>
                        <!-- Notification -->
                        <v-btn icon variant="text"  class="custom-hover-primary ml-0 ml-md-5 text-muted">
                            <v-badge dot color="primary" offset-x="-5" offset-y="-3">
                                <BellRingingIcon stroke-width="1.5" size="22" />
                            </v-badge>
                        </v-btn>
                    </div>
                    <div>
                        <!-- Upgrade button -->
                        <!-- <v-btn class="mr-2 bg-primary rounded-pill"
                            href="https://www.wrappixel.com/templates/spike-vuejs-admin-dashboard/#demos"
                            target="_blank">Upgrade to Pro</v-btn> -->
                        <!-- User Profile -->
                        <v-menu :close-on-content-click="false">
                            <template v-slot:activator="{ props }">
                                <v-btn class="" variant="text" v-bind="props" icon>
                                    <v-avatar size="35">
                                        <img src="@/assets/images/profile/user-1.jpg" height="35" alt="user" />
                                    </v-avatar>
                                </v-btn>
                            </template>
                            <v-sheet rounded="xl" width="200" elevation="10" class="mt-2">
                                <v-list class="py-0" lines="one" density="compact">
                                    <v-list-item value="item1" color="primary" >
                                        <template v-slot:prepend>
                                            <UserIcon stroke-width="1.5" size="20"/>
                                        </template>
                                        <v-list-item-title class="pl-4 text-body-1">My Profile</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item value="item2" color="primary">
                                        <template v-slot:prepend>
                                            <MailIcon stroke-width="1.5" size="20"/>
                                        </template>
                                        <v-list-item-title  class="pl-4 text-body-1">My Account</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item value="item3" color="primary"> 
                                        <template v-slot:prepend>
                                            <ListCheckIcon stroke-width="1.5"  size="20"/>
                                        </template>
                                        <v-list-item-title class="pl-4 text-body-1">My Task</v-list-item-title>
                                    </v-list-item>
                                </v-list>
                                <div class="pt-4 pb-4 px-5 text-center">
                                    <v-btn to="" color="primary" variant="outlined" class="rounded-pill" block>Logout</v-btn>
                                </div>
                            </v-sheet>
                        </v-menu>
                    </div>
                </div>
            </v-app-bar>
        </div>
    </div>
</template>