<script setup>
import { Head } from '@inertiajs/vue3'
import UiParentCard from '@/shared/components/UiParentCard.vue';
</script>

<template>
    <Layout>
        <v-row>
            <v-col cols="12" md="12">
                <UiParentCard title="Sample Page"> 
                    <div class=""><p class="text-body-1">{{name}} </p></div>
                </UiParentCard>
            </v-col>
        </v-row>
    </Layout>
</template>
<script>
export default {
    props: {
        name: String
    },
    mounted() {
    }
}

</script>