import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";

import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

import "@mdi/font/css/materialdesignicons.css";
import "vuetify/styles";

import AdminLayout from "@/shared/template/Admin/Layout.vue";
import PublicLayout from "@/shared/template/Public/Layout.vue";

import { createPinia } from "pinia";

const pinia = createPinia();

const vuetify = createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: "dark",
        themes: {
            dark: {
                colors: {
                    background: "#120212", // Deep blackish-pink
                    surface: "#240024", // Darker pinkish surface
                    primary: "#ff007f", // Vibrant neon pink
                    secondary: "#00ffff", // Neon cyan for contrast
                    error: "#ff3366", // Lighter pinkish red
                    info: "#ff77ff", // Soft neon pink
                    success: "#ffb3ff", // Muted light pink
                    warning: "#ffa500", // Bright orange for pop
                },
            },
        },
    },
    defaults: {
        VCard: {
            style: {
                background: "rgba(36, 0, 36, 0.8)", // Semi-transparent surface
                border: "1px solid #ff007f",
                boxShadow: "0px 4px 20px 2px rgba(255, 0, 127, 0.6)",
                color: "#ffffff",
                marginBottom: "rem",
            },
        },
    },
});

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./views/**/*.vue", { eager: true });
        let page = pages[`./views/${name}.vue`];

        if (!page || !page.default) {
            throw new Error(`Could not find page: ${name}`);
        }

        // Default to PublicLayout unless otherwise specified
        page.default.layout = PublicLayout;

        if (
            name.startsWith("Admin/") ||
            name.startsWith("VO/") ||
            name.startsWith("Example/")
        ) {
            if (
                name.startsWith("Admin/Login") ||
                name.startsWith("VO/Login") ||
                name.startsWith("Example/Login")
            ) {
                page.default.layout = undefined; // No layout for login pages
            } else {
                page.default.layout = AdminLayout;
            }
        }

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(vuetify)
            .mount(el);
    },
    title: (title) => {
        return title ? `${title} - Voxelize` : "Voxelize";
    },
    progress: true,
});
