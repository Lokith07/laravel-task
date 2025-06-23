<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

@include('layouts.login.header')

<!--begin::Body-->

<body class="login-page bg-body-secondary">
    @yield('main-content')
    <!-- /.login-box -->
    @include('layouts.login.footer')

    @stack('scripts')
</body>
<!--end::Body-->

</html>
