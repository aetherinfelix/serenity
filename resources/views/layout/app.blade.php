<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include('inc.head')

    <body>
    @include('inc.navbar')
    @include('inc.messages')
            <div class="container">

                <div class="my-4">
                    @yield('content')
                </div>
            </div>
        @include('inc.foot')
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
     </body>
</html>