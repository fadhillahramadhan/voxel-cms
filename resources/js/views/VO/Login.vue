<script setup>
import { Head, Link } from "@inertiajs/vue3";
// resources\js\assets\img\illustrations\auth-basic-login-mask-light.png

import authBasicLoginMaskLight from "@/assets/img/illustrations/auth-basic-login-mask-light.png";
import authBasicLoginMaskDark from "@/assets/img/illustrations/auth-cover-login-mask-dark.png";

// resources/assets/img/illustrations/auth-login-illustration-light.png
import authLoginIllustrationLight from "@/assets/img/illustrations/auth-login-illustration-light.png";
import authLoginIllustrationDark from "@/assets/img/illustrations/auth-login-illustration-dark.png";

// illustrations/auth-cover-login-mask-light.png
</script>

<template>
    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a
            href="index.html"
            class="auth-cover-brand d-flex align-items-center gap-2"
        >
            <span class="app-brand-logo demo">
                <span style="color: var(--bs-primary)">
                    <svg
                        width="268"
                        height="150"
                        viewBox="0 0 38 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                            fill="currentColor"
                        />
                        <path
                            d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                            fill="url(#paint0_linear_2989_100980)"
                            fill-opacity="0.4"
                        />
                        <path
                            d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                            fill="currentColor"
                        />
                        <path
                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                            fill="currentColor"
                        />
                        <path
                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                            fill="url(#paint1_linear_2989_100980)"
                            fill-opacity="0.4"
                        />
                        <path
                            d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                            fill="currentColor"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2989_100980"
                                x1="5.36642"
                                y1="0.849138"
                                x2="10.532"
                                y2="24.104"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop offset="0" stop-opacity="1" />
                                <stop offset="1" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient
                                id="paint1_linear_2989_100980"
                                x1="5.19475"
                                y1="0.849139"
                                x2="10.3357"
                                y2="24.1155"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop offset="0" stop-opacity="1" />
                                <stop offset="1" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
            </span>
            <span class="app-brand-text demo text-heading fw-semibold"
                >Materialize</span
            >
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">
            <!-- /Left Section -->
            <div
                class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2"
            >
                <img
                    class="auth-cover-illustration w-100"
                    alt="auth-illustration"
                    :src="authLoginIllustrationLight"
                />
                <img
                    :src="authBasicLoginMaskLight"
                    class="authentication-image"
                />
            </div>
            <!-- /Left Section -->

            <!-- Login -->
            <div
                class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6"
            >
                <div class="w-px-400 mx-auto pt-5 pt-lg-0">
                    <h4 class="mb-1">Welcome to Materialize! 👋</h4>
                    <p class="mb-5">
                        Please sign-in to your account and start the adventure
                    </p>

                    <div id="formAuthentication" class="mb-5">
                        <div class="form-floating form-floating-outline mb-5">
                            <input
                                type="text"
                                class="form-control"
                                v-model="user.member_account_username"
                                id="email"
                                name="email-username"
                                placeholder="Enter your email or username"
                                autofocus
                            />
                            <label for="email">Email or Username</label>
                        </div>
                        <div class="mb-5">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div
                                        class="form-floating form-floating-outline"
                                    >
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control"
                                            v-model="
                                                user.member_account_password
                                            "
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password"
                                        />
                                        <label for="password">Password</label>
                                    </div>
                                    <span
                                        class="input-group-text cursor-pointer"
                                        ><i class="ri-eye-off-line"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 d-flex justify-content-between mt-5">
                            <div class="form-check mt-2">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="remember-me"
                                />
                                <label
                                    class="form-check-label"
                                    for="remember-me"
                                >
                                    Remember Me
                                </label>
                            </div>
                            <a
                                href="auth-forgot-password-cover.html"
                                class="float-end mb-1 mt-2"
                            >
                                <span>Forgot Password?</span>
                            </a>
                        </div>
                        <button
                            class="btn btn-primary d-grid w-100"
                            @click="login"
                        >
                            Sign in
                        </button>
                    </div>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="auth-register-cover.html">
                            <span>Create an account</span>
                        </a>
                    </p>

                    <div class="divider my-5">
                        <div class="divider-text">or</div>
                    </div>

                    <div class="d-flex justify-content-center gap-2">
                        <a
                            href="javascript:;"
                            class="btn btn-icon rounded-circle btn-text-facebook"
                        >
                            <i class="tf-icons ri-facebook-fill"></i>
                        </a>

                        <a
                            href="javascript:;"
                            class="btn btn-icon rounded-circle btn-text-twitter"
                        >
                            <i class="tf-icons ri-twitter-fill"></i>
                        </a>

                        <a
                            href="javascript:;"
                            class="btn btn-icon rounded-circle btn-text-github"
                        >
                            <i class="tf-icons ri-github-fill"></i>
                        </a>

                        <a
                            href="javascript:;"
                            class="btn btn-icon rounded-circle btn-text-google-plus"
                        >
                            <i class="tf-icons ri-google-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
</template>

<style>
.authentication-wrapper {
    display: flex;
    flex-basis: 100%;
    min-height: 100vh;
    width: 100%;
}
.authentication-wrapper .authentication-inner {
    width: 100%;
}
.authentication-wrapper.authentication-basic {
    align-items: center;
    justify-content: center;
}
.authentication-wrapper .auth-cover-illustration {
    z-index: 1;
    max-inline-size: 38rem;
}
.authentication-wrapper .authentication-image {
    z-index: -1;
    inline-size: 100%;
    inset-block-end: 7%;
    position: absolute;
    inset-inline-start: 0;
}
.authentication-wrapper.authentication-cover {
    align-items: flex-start;
}
.authentication-wrapper.authentication-cover .authentication-inner {
    min-height: 100vh;
    position: relative;
}
.authentication-wrapper.authentication-cover .authentication-image {
    inline-size: 70%;
}
html:not([dir="rtl"])
    .authentication-wrapper.authentication-cover
    .authentication-image {
    inset-inline-start: unset;
}
.authentication-wrapper.authentication-basic .authentication-inner {
    max-width: 450px;
}
.authentication-wrapper .auth-input-wrapper .auth-input {
    max-width: 50px;
    padding-left: 0.4rem;
    padding-right: 0.4rem;
    font-size: 150%;
}
.authentication-wrapper .divider .divider-text {
    font-size: 0.9375rem;
}

@media (max-width: 575.98px) {
    .authentication-wrapper .auth-input-wrapper .auth-input {
        font-size: 1.125rem;
    }
}
@media (max-width: 1199.98px) {
    .authentication-cover .authentication-image {
        inset-block-end: 9%;
    }
    [dir="rtl"] .authentication-cover .authentication-image {
        inline-size: 65%;
    }
}
#twoStepsForm .fv-plugins-bootstrap5-row-invalid .form-control {
    border-color: #ff4d49;
}

@media (max-width: 575.98px) {
    .numeral-mask-wrapper .numeral-mask {
        padding: 0 !important;
    }
    .numeral-mask {
        margin-inline: 1px !important;
    }
}
.light-style .authentication-wrapper .authentication-bg {
    background-color: #fff;
}
.light-style .authentication-wrapper .divider .divider-text {
    color: #3b4056;
}

.dark-style .authentication-wrapper .authentication-bg {
    background-color: #30334e;
}
.dark-style .authentication-wrapper .divider .divider-text {
    color: #d7d8ed;
}
</style>
<script>
export default {
    name: "Login",
    data() {
        return {
            errorLogin: false,
            user: {
                member_account_username: "",
                member_account_password: "",
                remember: false,
            },
        };
    },
    methods: {
        async login() {
            console.log(this.user);
            await this.$inertia.post("/vo/login", this.user);
        },
    },
};
</script>
