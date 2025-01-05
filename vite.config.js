import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue"; // Vue plugin to handle Vue files
import laravel from "laravel-vite-plugin"; // Laravel Vite plugin

export default defineConfig({
    plugins: [
        vue(), // Vue support
        laravel({
            input: [
                "resources/js/app.js", // Main JS
                // @vite('resources/assets/css/normalize.css')
                "resources/assets/css/normalize.css",
            ],
            refresh: true, // Enable auto-reloading of assets during development
        }),
    ],
});
