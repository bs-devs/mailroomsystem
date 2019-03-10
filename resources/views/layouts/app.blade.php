
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name'), 'Mail Room System' }}</title>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('inc.navbar')
            @include('inc.sidebar-main')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><!-- Header Title --></h1>
                        </div><!-- /.col -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                <main role="main" class="container">
                    @yield('content')
                </main>
                </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('inc.footer')
        </div>
        <!-- ./wrapper -->

        <script src="{{ asset('js/app.js') }}"></script>

        {{-- For Laravel/ckeditor --}}
        {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script> --}}
    </body>
</html>
