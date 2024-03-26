<script setup>
import { ref } from "vue";

import UiParentCard from '@/shared/components/UiParentCard.vue';

import CardsProps from "@/shared/components/cards/CardsProps.vue";
import CardsSlots from "@/shared/components/cards/CardsSlots.vue";
import CardsContentWrap from "@/shared/components/cards/CardsContentWrap.vue";
import CardsMedia from "@/shared/components/cards/CardsMedia.vue";
import CardsWeather from "@/shared/components/cards/CardsWeather.vue";
import CardsTwitter from "@/shared/components/cards/CardsTwitter.vue";
</script>

<template>
  <v-row>
    <v-col cols="12" sm="12" lg="6">
      <UiParentCard title="With Props">
        <CardsProps />
      </UiParentCard>
    </v-col>
    <v-col cols="12" sm="12" lg="6">
      <UiParentCard title="With Slots">
        <CardsSlots />
      </UiParentCard>
    </v-col>
    <v-col cols="12" sm="12" lg="6" class="d-flex align-items-stretch">
      <UiParentCard title="Content Wrap">
        <CardsContentWrap />
      </UiParentCard>
    </v-col>

    <v-col cols="12" sm="12" lg="6" class="d-flex align-items-stretch">
      <UiParentCard title="Card Media">
        <CardsMedia />
      </UiParentCard>
    </v-col>

    <v-col cols="12" sm="12" lg="6" class="d-flex align-items-stretch">
      <UiParentCard title="Weather Card">
        <CardsWeather />
      </UiParentCard>
    </v-col>

    <v-col cols="12" sm="12" lg="6">
      <UiParentCard title="Twitter Card">
        <CardsTwitter />
      </UiParentCard>
    </v-col>
  </v-row>
</template>
