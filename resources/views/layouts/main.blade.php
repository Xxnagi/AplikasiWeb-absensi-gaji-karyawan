<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />


    <title>APLIKASI GAJI</title>
</head>

<body>

    @auth
        @include('partials.navbar')
        @include('partials.sidebar')
        <div class="p-4 mt-14 sm:ml-64">
            @yield('container')
        </div>
    @else
        @yield('login')
    @endauth



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
</body>

</html>
