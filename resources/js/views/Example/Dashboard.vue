<script setup>
// import UiParentCard from '@/shared/components/UiParentCard.vue';
import ProfitExpanse from "@/shared/components/dashboards/ProfitExpense.vue";
import TrafficDistribution from "@/shared/components/dashboards/TrafficDistribution.vue";
import ProductSales from "@/shared/components/dashboards/ProductSales.vue";
import UpcommingSchedule from "@/shared/components/dashboards/UpcommingSchedule.vue";
import TopPayingClients from "@/shared/components/dashboards/TopPayingClients.vue";
import ProductCards from "@/shared/components/dashboards/ProductCards.vue";
</script>

<template>
  <v-row>
        <v-col cols="12" sm="12" lg="8">
            <ProfitExpanse />
        </v-col>
        <v-col cols="12" sm="12" lg="4">
            <div class="mb-6">
                <TrafficDistribution/>
            </div>
            <div>
                <ProductSales/>
            </div>
        </v-col>
        <v-col cols="12" sm="12" lg="4">
            <UpcommingSchedule/>
        </v-col>
        <v-col cols="12" sm="12" lg="8">
            <TopPayingClients/>
        </v-col>
        <v-col cols="12" sm="12" lg="12">
            <ProductCards/>
        </v-col>
        <v-col class="text-center mt-2">
            <p class="text-muted">Design and Developed by <a flat variant="text" href="https://www.wrappixel.com/" target="_blank" class="pl-1 text-primary">wrappixel.com</a></p>
        </v-col>
    </v-row>
</template>