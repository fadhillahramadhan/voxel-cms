import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue"; // Vue plugin to handle Vue files
import laravel from "laravel-vite-plugin"; // Laravel Vite plugin

export default defineConfig({
    plugins: [
        vue(), // Vue support
        laravel({
            input: [
                // CSS Files
                "resources/css/app.css", // Your global app.css
                "resources/assets/vendor/fonts/remixicon/remixicon.css", // Font icons
                "resources/assets/vendor/fonts/flag-icons.css", // Flag icons
                "resources/assets/vendor/libs/node-waves/node-waves.css", // Node Waves CSS
                "resources/assets/vendor/css/rtl/core.css", // RTL Core CSS
                "resources/assets/vendor/css/rtl/theme-default.css", // RTL Theme CSS
                "resources/assets/css/demo.css", // Demo-specific CSS
                "resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css", // Perfect Scrollbar CSS
                "resources/assets/vendor/libs/typeahead-js/typeahead.css", // Typeahead CSS
                "resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css", // DataTables Bootstrap 5 CSS
                "resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css", // DataTables Responsive CSS
                "resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css", // DataTables Buttons CSS
                "resources/assets/vendor/libs/apex-charts/apex-charts.css", // Apex Charts CSS
                "resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css", // DataTables Checkboxes CSS

                // JS Files
                "resources/assets/vendor/js/helpers.js", // Helper JS
                "resources/assets/vendor/js/template-customizer.js", // Template Customizer JS
                "resources/assets/js/config.js", // Config JS
                "resources/js/app.js", // Main JS

                // Vendor JS
                "resources/assets/vendor/libs/jquery/jquery.js", // jQuery JS
                "resources/assets/vendor/libs/popper/popper.js", // Popper.js
                "resources/assets/vendor/js/bootstrap.js", // Bootstrap JS
                "resources/assets/vendor/libs/node-waves/node-waves.js", // Node Waves JS
                "resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js", // Perfect Scrollbar JS
                "resources/assets/vendor/libs/hammer/hammer.js", // Hammer.js
                "resources/assets/vendor/libs/i18n/i18n.js", // Internationalization JS
                "resources/assets/vendor/libs/typeahead-js/typeahead.js", // Typeahead JS
                "resources/assets/vendor/js/menu.js", // Menu JS

                // Vendors JS (for specific functionalities)
                "resources/assets/vendor/libs/moment/moment.js", // Moment.js
                "resources/assets/vendor/libs/apex-charts/apexcharts.js", // ApexCharts JS

                // Main JS Files
                "resources/assets/js/main.js", // Main JS file
                "resources/assets/js/app-academy-dashboard.js", // Page-specific JS (e.g., dashboard)
            ],
            refresh: true, // Enable auto-reloading of assets during development
        }),
    ],
});
