<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr">

<head>
    <!-- @vite('resources/js/app.js') -->

    <!-- @inertiaHead -->


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/remixicon/remixicon.css" /> -->
    @vite('resources/assets/vendor/fonts/remixicon/remixicon.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->
    @vite('resources/assets/vendor/fonts/flag-icons.css')

    <!-- Menu waves for no-customizer fix -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" /> -->
    @vite('resources/assets/vendor/libs/node-waves/node-waves.css')

    <!-- Core CSS -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" /> -->
    @vite('resources/assets/vendor/css/rtl/core.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" /> -->
    @vite('resources/assets/vendor/css/rtl/theme-default.css')
    <!-- <link rel="stylesheet" href="../../assets/css/demo.css" /> -->
    @vite('resources/assets/css/demo.css')

    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> -->
    @vite('resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" /> -->
    @vite('resources/assets/vendor/libs/typeahead-js/typeahead.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" /> -->
    @vite('resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" /> -->
    @vite('resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" /> -->
    @vite('resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" /> -->
    @vite('resources/assets/vendor/libs/apex-charts/apex-charts.css')
    <!-- <link rel="stylesheet" href="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" /> -->
    @vite('resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')

    <!-- Page CSS -->

    <!-- Helpers -->
    <!-- <script src="../../assets/vendor/js/helpers.js"></script> -->
    @vite('resources/assets/vendor/js/helpers.js')
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="../../assets/vendor/js/template-customizer.js"></script> -->
    @vite('resources/assets/vendor/js/template-customizer.js')
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <!-- <script src="../../assets/js/config.js"></script> -->
    @vite('resources/assets/js/config.js')


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
    <!-- <script src="../../assets/vendor/libs/jquery/jquery.js"></script> -->
    @vite('resources/assets/vendor/libs/jquery/jquery.js')
    <!-- <script src="../../resources/assets/vendor/libs/popper/popper.js"></script> -->
    @vite('resources/assets/vendor/libs/popper/popper.js')
    <!-- <script src="../../resources/assets/vendor/js/bootstrap.js"></script> -->
    @vite('resources/assets/vendor/js/bootstrap.js')
    <!-- <script src="../../resources/assets/vendor/libs/node-waves/node-waves.js"></script> -->
    @vite('resources/assets/vendor/libs/node-waves/node-waves.js')
    <!-- <script src="../../resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script> -->
    @vite('resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')
    <!-- <script src="../../resources/assets/vendor/libs/hammer/hammer.js"></script> -->
    @vite('resources/assets/vendor/libs/hammer/hammer.js')
    <!-- <script src="../../resources/assets/vendor/libs/i18n/i18n.js"></script> -->
    @vite('resources/assets/vendor/libs/i18n/i18n.js')
    <!-- <script src="../../resources/assets/vendor/libs/typeahead-js/typeahead.js"></script> -->
    @vite('resources/assets/vendor/libs/typeahead-js/typeahead.js')
    <!-- <script src="../../resources/assets/vendor/js/menu.js"></script> -->
    @vite('resources/assets/vendor/js/menu.js')

    <!-- endbuild -->

    <!-- Vendors JS -->
    <!-- <script src="../../resources/assets/vendor/libs/moment/moment.js"></script> -->
    @vite('resources/assets/vendor/libs/moment/moment.js')
    <!-- <script src="../../resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script> -->
    @vite('resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')
    <!-- <script src="../../resources/assets/vendor/libs/apex-charts/apexcharts.js"></script> -->
    @vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')

    <!-- Main JS -->
    <!-- <script src="../../resources/assets/js/main.js"></script> -->
    @vite('resources/assets/js/main.js')

    <!-- Page JS -->
    <!-- <script src="../../resources/assets/js/app-academy-dashboard.js"></script> -->
    @vite('resources/assets/js/app-academy-dashboard.js')


</body>

</html>