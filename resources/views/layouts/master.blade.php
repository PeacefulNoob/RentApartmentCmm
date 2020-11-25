<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMM | Rental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CMM rental website. ">
    <meta name="keywords" content="real estate,apartments,apartment,house,summer,crna gora,montenegro,enjoy,winter,top,luxury,afordable,reasonable,kotor,sea,house,lovely">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="PeacefulNoob">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- FullCalendar -->
    {{--<script src="/js/moment.js"></script>
    <script src="/js/main.min.js"></script>--}}
    <script src="/js/moment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/locales-all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.css">

   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale-all.min.js" integrity="sha512-L0BJbEKoy0y4//RCPsfL3t/5Q/Ej5GJo8sx1sDr56XdI7UQMkpnXGYZ/CCmPTF+5YEJID78mRgdqRCo1GrdVKw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/af.min.js" integrity="sha512-lnYINW0FnmQ7QKM2C5b94J7Ev9xp80zvVPs5qY2dImqaUVAyPiGUtZdSks9UsKixpl0G+Vee3Aps3XqOGm4LDQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.print.min.css" integrity="sha512-5tgjCXQWNEEUuHZYYhokrbmmcQe6v4cbsb5dhyFwuUOOKtJglWo8046a4nDoxJlazTma4qNAM6+ZYZA7yjgZKw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/gcal.min.js" integrity="sha512-RNx7SF8EJxJ8DMmlgPg6bTZbMilWFlu883XE7OLXKAdEAlfRDjS4YPBHd0WMvCNHugxESvDZIlU+y1M06duXGQ==" crossorigin="anonymous"></script>
--}}
    <link rel="stylesheet" href="/js/main.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="/assets/css/app.css" rel="stylesheet">

</head>
<body>
    @include('layouts.header')

    <div id="app">
        <main class="">
            @include('components.alerts')
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')

<script>
    var calendarEl = document.getElementById("calendar-1");
    var calendar = new Calendar(calendarEl, {
        selectable: true
    });
</script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script src="/assets/js/main.js"></script>

</body>
</html>
