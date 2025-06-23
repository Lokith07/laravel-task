<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

@include('layouts.admin-panel.header')


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('layouts.admin-panel.side-navbar')

        <!--begin::App Main-->
        <main class="app-main">
            @yield('main-content')
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline"></div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
                Copyright &copy; 2025&nbsp;
                <a href="#" class="text-decoration-none">EMS</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->

    @include('layouts.admin-panel.footer')

    @stack('scripts')

</body>
<!--end::Body-->

</html>
