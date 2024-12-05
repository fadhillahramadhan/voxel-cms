<script setup>
import { Head } from "@inertiajs/vue3";
import { CameraPlusIcon } from "vue-tabler-icons";

import UiParentCard from "@/shared/components/UiParentCard.vue";
</script>

<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="My App" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </Head>

    <v-stepper
        v-model="step"
        :items="items"
        show-actions
        class="rounded-xl elevation-10"
    >
        <template v-slot:item.1>
            <v-row class="mb-3">
                <v-col cols="6">
                    <v-label class="font-weight-medium mb-1"
                        >Kode Sponsor Mitra</v-label
                    >
                    <v-text-field
                        variant="outlined"
                        color="primary"
                        placeholder="Masukan kode sponsor mitra contoh: DS10000005"
                    ></v-text-field>
                    <v-label class="font-weight-medium mb-1"
                        >Kode Upline Mitra</v-label
                    >
                    <v-text-field
                        variant="outlined"
                        class="border-borderColor"
                        type="password"
                        placeholder="Masukan kode upline mitra contoh: DS10000005"
                        color="primary"
                    ></v-text-field>
                </v-col>
                <v-col cols="6">
                    <!-- posisi jaringan -->
                    <v-label class="font-weight-medium mb-1"
                        >Posisi Jaringan</v-label
                    >
                    <v-select
                        v-model="selected"
                        :items="items"
                        placeholder="Posisi Jaringan"
                        color="primary"
                    ></v-select>

                    <!-- password akun -->
                    <v-label class="font-weight-medium mb-1"
                        >Password Akun</v-label
                    >
                    <v-text-field
                        v-model="password"
                        :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                        :type="show1 ? 'text' : 'password'"
                        name="password"
                        placeholder="At least 8 characters"
                        counter
                        color="primary"
                        @click:append="show1 = !show1"
                    ></v-text-field>
                </v-col>
            </v-row>
        </template>

        <template v-slot:item.2>
            <v-row class="mb-3">
                <v-col cols="12" sm="4" class="d-flex">
                    <v-hover v-slot="{ isHovering, props }">
                        <v-card
                            :class="{ 'on-hover': isHovering }"
                            :elevation="isHovering ? 12 : 2"
                            v-bind="props"
                            max-width="280"
                            max-height="280px"
                            class="mx-auto rounded-pill"
                            style="position: relative"
                        >
                            <v-img
                                alt="John"
                                class="rounded-pill"
                                src="https://api.multiavatar.com/Binx Bond.png"
                                cover
                            >
                                <CameraPlusIcon stroke-width="1.5" />
                            </v-img>
                        </v-card>
                    </v-hover>
                </v-col>
                <!-- Form column -->
                <v-col cols="12" sm="8">
                    <!-- Personal Information -->
                    <v-label class="font-weight-medium mb-1">Email</v-label>
                    <v-text-field
                        variant="outlined"
                        color="primary"
                        placeholder="Masukan email anda"
                    ></v-text-field>

                    <v-label class="font-weight-medium mb-1"
                        >Nomor Handphone</v-label
                    >
                    <v-text-field
                        variant="outlined"
                        class="border-borderColor"
                        type="password"
                        placeholder="Masukan nomor handphone anda"
                        color="primary"
                    ></v-text-field>

                    <v-label class="font-weight-medium mb-1"
                        >Nama Lengkap</v-label
                    >
                    <v-text-field
                        v-model="password"
                        name="text"
                        placeholder="At least 8 characters"
                        counter
                        color="primary"
                    ></v-text-field>

                    <!-- Gender and Location -->
                    <v-row>
                        <v-col cols="6">
                            <v-label class="font-weight-medium mb-1"
                                >Jenis Kelamin</v-label
                            >
                            <v-select
                                v-model="selected"
                                :items="items"
                                placeholder="Jenis Kelamin"
                                color="primary"
                            ></v-select>
                        </v-col>
                        <v-col cols="6">
                            <v-label class="font-weight-medium mb-1"
                                >Provinsi</v-label
                            >
                            <v-select
                                v-model="selected"
                                :items="items"
                                placeholder="Provinsi"
                                color="primary"
                            ></v-select>
                        </v-col>
                        <v-col cols="6">
                            <v-label class="font-weight-medium mb-1"
                                >Kota</v-label
                            >
                            <v-select
                                v-model="selected"
                                :items="items"
                                placeholder="Kota"
                                color="primary"
                            ></v-select>
                        </v-col>
                        <v-col cols="6">
                            <v-label class="font-weight-medium mb-1"
                                >Kecamatan</v-label
                            >
                            <v-select
                                v-model="selected"
                                :items="items"
                                placeholder="Kecamatan"
                                color="primary"
                            ></v-select>
                        </v-col>
                    </v-row>

                    <!-- Address -->
                    <v-label class="font-weight-medium mb-1">Alamat</v-label>
                    <v-textarea
                        v-model="password"
                        name="text"
                        placeholder="At least 8 characters"
                        counter
                        color="primary"
                    ></v-textarea>
                </v-col>
                <v-col cols="12" sm="4" class="d-flex">
                    <v-hover v-slot="{ isHovering, props }">
                        <v-card
                            :class="{ 'on-hover': isHovering }"
                            :elevation="isHovering ? 12 : 2"
                            v-bind="props"
                            max-width="240"
                            max-height="240px"
                            class="mx-auto"
                        >
                            <v-img
                                alt="John"
                                class="rounded-lg"
                                src="http://[::1]:5173/resources/js/assets/images/profile/user-1.jpg"
                                cover
                            >
                                <v-card-title
                                    class="text-h6 text-white d-flex align-center justify-center"
                                >
                                    <v-btn
                                        v-show="isHovering"
                                        icon="mdi-pencil"
                                        variant="text"
                                        class="align-self-center"
                                    ></v-btn>
                                </v-card-title>
                            </v-img>
                        </v-card>
                    </v-hover>
                </v-col>
                <v-col cols="12" sm="8">
                    <!-- Jenis identitas -->
                    <v-label class="font-weight-medium mb-1"
                        >Jenis Identitas</v-label
                    >
                    <v-select
                        v-model="selected"
                        :items="items"
                        placeholder="Jenis Identitas"
                        color="primary"
                    ></v-select>
                    <!-- Nomor identitas -->
                    <v-label class="font-weight-medium mb-1"
                        >Nomor Identitas</v-label
                    >
                    <v-text-field
                        v-model="password"
                        name="text"
                        placeholder="At least 8 characters"
                        counter
                        color="primary"
                    ></v-text-field>
                </v-col>
            </v-row>
        </template>

        <template v-slot:item.3> </template>
    </v-stepper>
</template>

<style scoped>
.v-card {
    transition: opacity 0.4s ease-in-out;
}

.v-card:not(.on-hover) {
    opacity: 0.6;
}

.show-btns {
    color: rgba(255, 255, 255, 1) !important;
}
</style>

<script>
export default {
    data: () => ({
        password: "",
        show1: false,

        step: 2,
        items: ["Pilih Paket", "Data Pribadi", "Data Optional"],
    }),

    computed: {},
};
</script>
