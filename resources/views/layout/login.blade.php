@extends('../layout/base')

@section('body')
    <body class="login">
        @yield('content')
        
        <!--('../layout/components/dark-mode-switcher')
        ('../layout/components/main-color-switcher')-->

        <!-- BEGIN: JS Assets-->
        @vite('resources/js/app.js')
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
