{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<!--begin::Head-->--}}
{{--<head><base href="../../../../">--}}
{{--    <meta charset="utf-8" />--}}
{{--    <title>Hotdeal | Admin</title>--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <meta name="description" content="Login page example" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />--}}
{{--    <link rel="canonical" href="https://keenthemes.com/metronic" />--}}
{{--    <!--begin::Fonts-->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />--}}
{{--    <!--end::Fonts-->--}}
{{--    <!--begin::Page Custom Styles(used by this page)-->--}}
{{--    <link href="{{asset('/assets/css/pages/login/classic/login-1.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <!--end::Page Custom Styles-->--}}
{{--    <!--begin::Global Theme Styles(used by all pages)-->--}}
{{--    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <!--end::Global Theme Styles-->--}}
{{--    <!--begin::Layout Themes(used by all pages)-->--}}
{{--    <link href="{{asset('assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset('assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset('assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset('assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>--}}
{{--    <!--end::Layout Themes-->--}}
{{--    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/png">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">--}}
{{--    <style>--}}
{{--        textarea {--}}
{{--            all: revert;--}}
{{--            white-space: pre-line;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<!--end::Head-->--}}

{{--<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">--}}
{{--<!--begin::Main-->--}}
{{--@if(Auth::check())--}}
{{--    <div class="d-flex flex-column flex-root">--}}
{{--        <!--begin::Page-->--}}
{{--        <div class="d-flex flex-row flex-column-fluid page">--}}
{{--            <!--begin::Aside-->--}}
{{--        @include('layouts/aside')--}}
{{--        <!--end::Aside-->--}}
{{--            <!--begin::Wrapper-->--}}
{{--            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">--}}
{{--                <!--begin::Header-->--}}
{{--            @include('layouts.header')--}}
{{--            <!--end::Header-->--}}
{{--                <!--begin::Content-->--}}
{{--                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">--}}
{{--                    <!--begin::Subheader-->--}}
{{--                @include('layouts.subheader')--}}
{{--                <!--end::Subheader-->--}}
{{--                </div>--}}
{{--                <!--end::Content-->--}}
{{--                <!--begin::Footer-->--}}
{{--            @include('layouts.footer')--}}
{{--            <!--end::Footer-->--}}
{{--            </div>--}}
{{--            <!--end::Wrapper-->--}}
{{--        </div>--}}
{{--        <!--end::Page-->--}}
{{--    </div>--}}
{{--    <!--end::Main-->--}}
{{--    <!-- begin::User Panel-->--}}
{{--    @include('layouts.panel')--}}
{{--    <!-- end::User Panel-->--}}
{{--    <!--end::Global Config-->--}}
{{--    <!--begin::Global Theme Bundle(used by all pages)-->--}}
{{--@else--}}
{{--    @yield('content')--}}
{{--@endif--}}


{{--<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>--}}
{{--<!--begin::Global Config(global config for global JS scripts)-->--}}
{{--<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>--}}
{{--<script src="{{ asset('/assets/plugins/global/plugins.bundle.js')}}"></script>--}}
{{--<script src="{{asset('/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>--}}
{{--<script src="{{asset('/assets/js/scripts.bundle.js')}}"></script>--}}
{{--<script src="{{asset('/assets/js/core.datatable.js')}}"></script>--}}
{{--<!--end::Global Theme Bundle-->--}}
{{--<!--begin::Page Scripts(used by this page)-->--}}
{{--<script src="{{asset('assets/js/pages/custom/login/login-general.js')}}"></script>--}}

{{--<script src="{{asset('assets/js/pages/crud/ktdatatable/base/html-table.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/datatables.min.js')}}"></script>--}}
{{--<!--end::Page Scripts-->--}}
{{--@yield('js');--}}
{{--</body>--}}
{{--<!--end::Body-->--}}
{{--</html>--}}




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>--}}
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('assets/js/datatables.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

        <title>{{ config('app.name', 'Backoffice') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
{{--        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />--}}
        <link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
