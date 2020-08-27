<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

    @include('admin.inclodeAd.header')

    @include('admin.inclodeAd.aside')
    <div class="page-wrapper">
        @yield('contentAd')

    </div>
</div>

<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<!-- apps -->
<script src="{{asset('admin/dist/js/search.js')}}"></script>

<script src="{{asset('admin/dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('admin/dist/js/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<script src="{{asset('admin/assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/c3/c3.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>


</body>

</html>
