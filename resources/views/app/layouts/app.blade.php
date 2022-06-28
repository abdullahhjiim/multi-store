<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="OLFAT SHIPPING" name="description">
    <meta content="Olfat Shipping" name="author">
    <meta name="keywords" content="Olfat, Shipping"/>

    <!-- Title -->
    <title>Olfat Shipping</title>

    @include('app.layouts.verticalmenu.vertical-light.boxed-styles')

</head>

<body class="app sidebar-mini boxed">

<!--Global-Loader-->
<div id="global-loader">
    <img src="{{URL::asset('assets/images/brand/icon.png')}}" alt="loader">
</div>

<div class="page">
    <div class="page-main">
        <!--app-header-->
        <div class="app-header header d-flex">
            <div class="container-fluid">
                @include('app.layouts.components.app-header')
            </div>
        </div>

    @include('app.layouts.components.sidebar-menu')

    <!-- app-content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app mt-7">



                @yield('content')

            </div>

            @include('app.layouts.components.right-sidebar')

            @yield('modals')

        </div>
        <!-- End app-content-->
    </div>

    @include('app.layouts.components.footer')

</div>
<!-- End Page -->

@include('app.layouts.verticalmenu.vertical-light.scripts')

</body>
</html>
