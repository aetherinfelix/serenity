<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('inc.head')

    <body>
    @include('inc.navbar')
            <div class="container">

                <div class="my-4">
                    @yield('content')
                </div>
            </div>
        @include('inc.foot')
     </body>
</html>