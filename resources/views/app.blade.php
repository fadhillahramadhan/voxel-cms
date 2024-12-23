<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr">

<head>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    @vite('resources/assets/vendor/fonts/remixicon/remixicon.css')
    @vite('resources/assets/vendor/fonts/flag-icons.css')

    <!-- Menu waves for no-customizer fix -->
    @vite('resources/assets/vendor/libs/node-waves/node-waves.css')

    <!-- Core CSS -->
    @vite('resources/assets/vendor/css/rtl/core.css')
    @vite('resources/assets/vendor/css/rtl/theme-default.css')
    @vite('resources/assets/css/demo.css')

    <!-- Vendors CSS -->
    @vite('resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')
    @vite('resources/assets/vendor/libs/typeahead-js/typeahead.css')
    @vite('resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')
    @vite('resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')
    @vite('resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')
    @vite('resources/assets/vendor/libs/apex-charts/apex-charts.css')
    @vite('resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')

    <!-- Page CSS -->

    <!-- Helpers -->
    @vite('resources/assets/vendor/js/helpers.js')
    @vite('resources/assets/vendor/js/template-customizer.js')
    @vite('resources/assets/js/config.js')

    <!-- DATATABLES CSS -->
    @vite('resources/assets/css/datatable.css')


    <!-- Custom CSS -->
    @vite('resources/assets/css/login.css')


    @vite('resources/js/app.js')

    @inertiaHead


    <style>
        /* give good scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>
    @inertia



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @vite('resources/assets/vendor/libs/jquery/jquery.js')
    @vite('resources/assets/vendor/libs/popper/popper.js')
    @vite('resources/assets/vendor/js/bootstrap.js')
    @vite('resources/assets/vendor/libs/node-waves/node-waves.js')
    @vite('resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')
    @vite('resources/assets/vendor/libs/hammer/hammer.js')
    @vite('resources/assets/vendor/libs/i18n/i18n.js')
    @vite('resources/assets/vendor/libs/typeahead-js/typeahead.js')
    @vite('resources/assets/vendor/js/menu.js')

    <!-- endbuild -->

    <!-- Vendors JS -->
    @vite('resources/assets/vendor/libs/moment/moment.js')
    @vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')

    <!-- Main JS -->
    @vite('resources/assets/js/main.js')

    <!-- Page JS -->
    @vite('resources/assets/js/app-academy-dashboard.js')


</body>

</html>