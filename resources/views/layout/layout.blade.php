<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $page_title ?? "pages "}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/img/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/img/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Clean and minimal Dashboard UI Design Kit">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Core - Dashboard Builder">
    <meta name="twitter:description" content="Clean and minimal Dashboard UI Design Kit">
    <meta name="twitter:creator" content="@ui8">
    <meta name="twitter:image" content="https://ui8-core.herokuapp.com/img/twitter-card.jpg">
    <meta property="og:title" content="Core - Dashboard Builder">
    <meta property="og:type" content="Article">
    <meta property="og:url" content="https://ui8.net/ui8/products/core-dashboard-builder">
    <meta property="og:image" content="https://ui8-core.herokuapp.com/img/fb-og-image.jpg">
    <meta property="og:description" content="Clean and minimal Dashboard UI Design Kit">
    <meta property="og:site_name" content="Core - Dashboard Builder">
    <meta property="fb:admins" content="132951670226590">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" href="{{asset('/assets/css/app.min.css')}}">
    <script>
        var viewportmeta = document.querySelector('meta[name="viewport"]');
        if (viewportmeta) {
            if (screen.width < 375) {
                var newScale = screen.width / 375;
                viewportmeta.content = 'width=375, minimum-scale=' + newScale +
                    ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
            } else {
                viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
            }
        }
    </script>
    <style>
        .tips__icon i {
            font-size: 22px;
        }

        .overview__icon i {
            font-size: 22px;
        }
    </style>
</head>

<body>
    <!-- <script>
        console.log(localStorage.getItem('darkMode'));
        if (localStorage.getItem('darkMode') === "on") {
            document.body.classList.add("dark");
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelector('.js-theme input').checked = true;
            });
        }
    </script> -->
    <!-- page-->
    <div class="page">
        <!-- header-->
        @include('layout.header')
        <!-- sidebar-->
        @include('layout.sidebar')
        <div class="overlay"></div>
        <!-- help-->
        @include('layout.help')
        <div class="overlay"></div>

        <!-- inner main contant-->

        @yield('content')

        <!-- footer -->
        @include('layout.footer')
</body>

</html>
