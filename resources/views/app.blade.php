<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'Voxelize') }}</title>
    <!-- E:\Project\Javascript\Voxelize\VoxelEditorCMS\public\icons.png -->
    <link rel="icon" href="{{ asset('icons.png') }}" type="image/png">
    @vite('resources/js/app.js')
    @vite('resources/assets/css/normalize.css')
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>