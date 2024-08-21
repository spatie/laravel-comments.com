<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
    <head>
        <meta charset="utf-8">

        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="dns-prefetch" href="//use.fontawesome.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">

        {{-- @include('partials.gtm-head') --}}

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel Comments')</title>
        <meta name="description" content="@yield('description')">
        <link rel="canonical" href="{{ url()->current() }}"/>

        <script src="https://kit.fontawesome.com/5a9e7acf39.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500,600,700,900&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @include('partials.favicon')

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:creator" content="@spatie_be"/>
        <meta name="twitter:site" content="@spatie_be"/>
        <meta name="twitter:title" content="@yield('title')"/>
        <meta name="twitter:description" content="@yield('description')"/>
        <meta name="twitter:image" content="{{ url()->to('/images/og-image.png') }}"/>

        <meta property="og:site_name" content="Laravel Comments">
        <meta property="og:locale" content="en_US">
        <meta property="og:url" content="{{ url()->current() }}"/>
        <meta property="og:type" content="product"/>
        <meta property="og:title" content="@yield('title')"/>
        <meta property="og:description" content="@yield('description')"/>
        <meta property="og:image" content="{{ url()->to('/images/og-image.png') }}"/>

        @bukStyles()
        @bukScripts()

        @laravelCommentsLivewireStyles
    </head>
    <body class="w-full font-sans leading-normal text-indigo-900">
        @yield('content')

        {{-- @include('partials.gtm-body') --}}
        <script src="{{ mix('js/app.js') }}" defer></script>

        @laravelCommentsLivewireScripts
    </body>
</html>
