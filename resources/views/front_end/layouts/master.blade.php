<!DOCTYPE HTML>
<head>
    <title> @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('public/front_end/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('public/front_end/css/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>

    <!-- checkout start -->

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href=" {{asset('public/front_end/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href=" {{asset('public/front_end/css/style_1.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('public/front_end/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" /> 
    <!-- //font-awesome icons -->

    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


    <!-- checkout end -->

    <!-- shopping cart start -->

   

    <script type="text/javascript" src="{{asset('public/front_end/js/jquery-1.7.2.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('public/front_end/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front_end/js/easing.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front_end/js/startstop-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front_end/js/jquery.accordion.js')}}"></script>

    <script type="text/javascript" src="{{asset('public/front_end/js/jquery.accordion.js')}}"></script>
    <script type="text/javascript">
$(document).ready(function () {
    $("#posts").accordion({
        header: "div.tab",
        alwaysOpen: false,
        autoheight: false
    });
});
    </script>


    <script src="{{asset('public/front_end/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
    <link href="{{asset('public/front_end/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('public/front_end/css/global.css')}}">
    <script src="{{asset('public/front_end/js/slides.min.jquery.js')}}"></script>
    <script>
$(function () {
    $('#products').slides({
        preload: true,
        preloadImage: 'img/loading.gif',
        effect: 'slide, fade',
        crossfade: true,
        slideSpeed: 350,
        fadeSpeed: 500,
        generateNextPrev: true,
        generatePagination: false
    });
});
    </script>
    
    
</head>
<body>

    <div class='wrap'>
        <!--Header top start -->
        @include('front_end.layouts.header_top')
        <!--Header top end -->
        <!-- categories& slider start-->
        @yield('categories_slider')
        <!-- categories& slider end-->

        @yield('content')


        <!--- footer start -->
        @include('front_end.layouts.footer')
        <!--- footer end -->
    </div>
</body>
</html>

