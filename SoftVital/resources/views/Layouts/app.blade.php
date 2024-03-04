

@include('layouts.head')

<body >
    <!-- Navbar -->
    @include('layouts.navebarre')

    <!--  Main Content -->

    @yield('content')

    @include('layouts.footer')
</body>
{{-- @yield('scripts')
@include('layouts.foot') --}}
