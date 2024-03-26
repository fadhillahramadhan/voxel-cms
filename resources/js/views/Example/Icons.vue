<script setup>
import UiParentCard from '@/shared/components/UiParentCard.vue';
import { TrashIcon, SendIcon, BellIcon } from 'vue-tabler-icons';

import { ref } from 'vue';

const btnsColor = ref(['primary', 'secondary', 'success', 'error', 'warning']);

</script>
<template>
     <v-row>
        <v-col cols="12" md="12">
            <UiParentCard title="Icons"> 
                <div class="pa-7 pt-0">
                    <iframe src="https://tabler-icons.io/" title="Inline Frame Example" frameborder="0" width="100%" height="650"></iframe>
                </div>
            </UiParentCard>
        </v-col>
    </v-row>
</template>