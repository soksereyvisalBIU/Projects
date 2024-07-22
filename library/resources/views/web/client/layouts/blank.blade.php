<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Explore Our E-library | Access Books, Articles & Resources Anytime')</title>
    <meta name="description" content="@yield('description', 'Explore our E-library and gain access to a vast collection of books, articles, and resources. Enhance your knowledge anytime, anywhere with our user-friendly online library platform. Start reading today and discover a world of information at your fingertips.')">
    <meta name="keywords" content="@yield('keywords', 'E-library, online library, digital library, books, articles, resources, reading, knowledge, education')">
    <link rel="canonical" href="@yield('canonical', 'https://www.your-website.com/e-library')">

    <link rel="icon" href="{{ asset('assets/img/s.ico') }}">

    <!-- Add any additional CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <!-- Yield for additional head elements -->
    @yield('head')
    
</head>
{{-- <body class="dark:bg-slate-700"> --}}
<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">

    <main>
        @yield('content')
    </main>

    @yield('scripts')


    
</body>
</html>
