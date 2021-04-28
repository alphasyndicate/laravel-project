<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP laravel framework tutorial website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
<nav class="p-6 bg-white flex justify-between">
<ul class="flex item-center">
<li><a href="#" class="p-3">Home</li>
<li><a href="#" class="p-3">Dashboard</li>
<li><a href="#" class="p-3">Post</li>
</ul>
<ul class="flex item-center">
<li><a href="#" class="p-3">Name</li>
<li><a href="#" class="p-3">Login</li>
<li><a href="#" class="p-3">Register</li>
<li><a href="#" class="p-3">Log out</li>
</ul>
</nav>
    @yield('content')
    <div class="justify-center flex">
    <div class="w-8/12 bg-white p-6 rounded-lg">
    Post
    </div>
    </div>
</body>
</html>