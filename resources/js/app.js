import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";

import PerfectScrollbar from "vue3-perfect-scrollbar";
import VueApexCharts from "vue3-apexcharts";

// import "@/assets/scss/style.scss";

import Layout from "@/shared/template/Layout.vue";

import { createPinia } from "pinia";

const pinia = createPinia();

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./views/**/*.vue", { eager: true });
        let page = pages[`./views/${name}.vue`];

        page.default.layout = page.default.layout || Layout;

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
                page.default.layout = undefined;
            } else {
                page.default.layout = Layout;
            }
        }

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // .use(vuetify)
            .use(pinia)
            .use(PerfectScrollbar)
            .use(VueApexCharts)
            .mount(el);
    },
    title: (title) => `${title} - Project Name`,
    progress: true,
});
