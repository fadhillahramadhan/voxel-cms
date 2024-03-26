<script setup>
import { Head } from '@inertiajs/vue3'
import UiParentCard from '@/shared/components/UiParentCard.vue';
</script>

<template>
    <Layout>
        <v-row>
            <v-col cols="12" md="12">
                <v-btn density="compact" @click="pushData()" icon="mdi-plus"></v-btn>

                <UiParentCard title="Sample Page"> 
                    <div class="">
                        <p class="text-body-1" v-for="item in testdata">{{item}}
                        </p>
                    </div>
                </UiParentCard>
            </v-col>
        </v-row>
    </Layout>
</template>
<script>
export default {
    props: {
        name: Object
    },
    data() {
      return {
        testdata:[1,2,3]
        
      };
    }, 
    methods: {
        getDataFromApi(){
            // ambil dari api
            this.testdata = [1,2,3,4,5,6,7,8,9,10]
        },
        pushData(){
            this.testdata.push(this.testdata[this.testdata.length - 1] + 1)
        }
    },
    mounted() {
        this.getDataFromApi()
    }
}

</script>