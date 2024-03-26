<script setup>
import UiParentCard from '@/shared/components/UiParentCard.vue';
</script>

<template>
    <v-row>
        <v-col cols="12">
            <UiParentCard title="Alert Basic">
                <v-alert class="mb-3 " color="error" variant="tonal">This is an error alert — check it out!</v-alert>
                <v-alert class="mb-3 " color="warning" variant="tonal">This is a warning alert — check it out!</v-alert>
                <v-alert class="mb-3 " color="info" variant="tonal">This is an info alert — check it out!</v-alert>
                <v-alert  color="success" variant="tonal">This is a success alert — check it out!</v-alert>
            </UiParentCard>
        </v-col>
        <v-col cols="12">
            <UiParentCard title="Alert Filled">
                <v-alert class="mb-3" type="error">This is an error alert — check it out!</v-alert>
                <v-alert class="mb-3" type="warning">This is a warning alert — check it out!</v-alert>
                <v-alert class="mb-3" type="info">This is an info alert — check it out!</v-alert>
                <v-alert type="success">This is a success alert — check it out!</v-alert>
            </UiParentCard>
        </v-col>
        <v-col cols="12">
            <UiParentCard title="Alert Filled">

            <v-alert
            border="start"
            variant="tonal"
            closable
            close-label="Close Alert"
            color="primary"
            title="Closable Alert"
            >
            Aenean imperdiet. Quisque id odio. Cras dapibus. Pellentesque ut neque. Cras dapibus.

            Vivamus consectetuer hendrerit lacus. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non
            </v-alert>
               
            </UiParentCard>
        </v-col>

    </v-row>
</template>

