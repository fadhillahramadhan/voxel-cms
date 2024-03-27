<script setup>
import { Head } from '@inertiajs/vue3'
import UiParentCard from '@/shared/components/UiParentCard.vue';
</script>

<template>
    <Head>
      <title>Home</title>
      <meta name="description" content="My App">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </Head>

    <v-row>
        <v-col cols="12" md="12">
            <UiParentCard title="Sample Page"> 
                <div class=""><p class="text-body-1">This is a sample page </p></div>
            </UiParentCard>
        </v-col>
    </v-row>
</template>

<script>
export default {
  props: {
  },
  mounted() {
  }
}

</script>