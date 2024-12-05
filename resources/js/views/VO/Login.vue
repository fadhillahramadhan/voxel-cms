<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Logo from '@/shared/components/Logo.vue';
</script>

<template>
  <div class="authentication">
    <Head>
      <title>Login</title>
      <meta name="description" content="My App">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </Head>
      <v-container fluid class="pa-3">
          <v-row class="h-100vh d-flex justify-center align-center">
            <!-- {{ $page.props.errors }} -->
              <v-col cols="12" class="d-flex align-center">
                  <div class="boxed-auth-wrap">
                      <v-card rounded="xl" elevation="10" class="px-sm-1 px-0  mx-auto index-2" max-width="450">
                          <v-card-item class="pa-sm-8">
                              <div class="d-flex justify-center mb-5">
                                  <Logo />
                              </div>
                              <!-- <div class="text-h6 text-medium-emphasis text-center mb-6">Your Social Campaigns</div> -->
                              <div class="d-flex align-center text-center mb-6">
                                  <div class="text-h6 w-100 px-5 font-weight-regular auth-divider position-relative">
                                      <span class="bg-surface px-5 py-3 position-relative text-subtitle-1 text-grey100">Your Multilevel Marketing Campaigns</span>
                                  </div>
                              </div>
                              <div>
                                  <v-row class="mb-3">
                                      <v-col cols="12">
                                          <v-label class="font-weight-medium mb-1">Username</v-label>
                                          <v-text-field variant="outlined"
                                          v-model="user.member_account_username"
                                          :error-messages="  $page.props.errors.member_account_username ? $page.props.errors.member_account_username[0] : '' "
                                          class="pwdInput"  color="primary"
                                          ></v-text-field>

                                      </v-col>
                                      <v-col cols="12">
                                          <v-label class="font-weight-medium mb-1">Password</v-label>
                                          <v-text-field 
                                          v-model="user.member_account_password"
                                          :error-messages="  $page.props.errors.member_account_password ? $page.props.errors.member_account_password[0] : '' "
                                          variant="outlined" class="border-borderColor" type="password" 
                                              color="primary"></v-text-field>


                                      </v-col>
                                      <v-col cols="12 " class="py-0">
                                          <div class="d-flex flex-wrap align-center w-100 ">
                                              <v-checkbox hide-details color="primary">
                                                  <template v-slot:label class="">Remember this Device</template>
                                              </v-checkbox>
                                          </div>
                                      </v-col>
                                      <v-col cols="12">
                                          <v-btn 
                                          @click="login"
                                          size="large" rounded="pill" color="primary" class="rounded-pill" block  flat>Sign
                                              In</v-btn>
                                      </v-col>
                                  </v-row>
                              </div>

                              <h6 class="text-subtitle-1  text-grey100 d-flex justify-center align-center mt-3">
                                  New to Spike?
                                  <v-btn 
                                  v-model="user.remember"
                                  class="pl-0 text-primary text-body-1 font-weight-medium  opacity-1 pl-2" height="auto"
                                      to="/auth/register" variant="plain">Create an account</v-btn>
                              </h6>
                          </v-card-item>
                      </v-card>
                  </div>
              </v-col>
          </v-row>
      </v-container>
  </div>
</template>

<!-- 100vh -->
<style>
  .login {
    background-image: url('/img/login.jpg');
    background-size: cover;
    background-position: center;
  }
</style>
<script>
  export default {
    name: "Login",
    data() {
      return {
        errorLogin: false,
        user: {
            member_account_username: '',
            member_account_password: '',
            remember: false
        }
      };
    },
    methods: {
      async login() {
        await this.$inertia.post('/vo/login', this.user)
      }
    }
  };
</script>