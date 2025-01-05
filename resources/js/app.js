import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";

import { createVuetify } from "vuetify";
import "@mdi/font/css/materialdesignicons.css";
import "vuetify/styles";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

import AdminLayout from "@/shared/template/Admin/Layout.vue";
import PublicLayout from "@/shared/template/Public/Layout.vue";

import { createPinia } from "pinia";

const pinia = createPinia();

const vuetify = createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: "light",
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
