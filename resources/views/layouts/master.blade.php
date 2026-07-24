<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Company Profile</title>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.glide.js') }}"></script>

    <script src="{{ asset('js/MyJQ.js') }}"></script>

    <script src="{{ asset('js/jquery.localScroll.min.js') }}"></script>

    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fullPage.css') }}">

    <link rel="stylesheet" href="{{ asset('css/screen.css') }}">

    <script>
        $(document).ready(function () {
            $('#navigations').localScroll({
                duration: 800
            });
        });

        new WOW().init();
    </script>

</head>

<body>

@include('partials.header')

<main style="min-height: 700px;">

    @yield('content')

</main>

@include('partials.footer')

<script>

$('.sliderwrapper .slider').glide({

    autoplay:7000,

    animationDuration:3000,

    arrows:true

});

$('.bestdisheswrapper .slider').glide({

    autoplay:false,

    animationDuration:700,

    arrows:true,

    navigation:false

});

</script>

</body>

</html>