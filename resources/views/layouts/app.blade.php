<!DOCTYPE html>
<html>

@include('layouts.head')
@include('layouts.header')

<body class="adminbody widescreen">
    <div id="app">
        <main class="py-4">
            <div class="container">
                @if (session('flash_message'))
                    <div class="row">
                        <div class="col-md-12 alert alert-info">
                            {{ session('flash_message') }}
                        </div>
                    </div>
                @endif
                @if (session('error_message'))
                    <div class="row">
                        <div class="col-md-12 alert alert-danger">
                            {{ session('error_message') }}
                        </div>
                    </div>
                @endif
            </div>

            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('addJs')
</body>
</html>
