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
        colors: {
            background: "#000000", // Black background
            surface: "#121212", // Darker surface color
            primary: "#6200ea", // Primary color (adjust as needed)
            secondary: "#03dac6", // Secondary color (adjust as needed)
            error: "#b00020", // Error color (adjust as needed)
            info: "#2196f3", // Info color (adjust as needed)
            success: "#4caf50", // Success color (adjust as needed)
            warning: "#fb8c00", // Warning color (adjust as needed)
        },
    },
});

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./views/**/*.vue", { eager: true });
        let page = pages[`./views/${name}.vue`];

        // Default to PublicLayout unless otherwise specified
        page.default.layout = undefined;

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
    title: (title) => `${title} - Project Name`,
    progress: true,
});
