<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @yield('header')
    <style>
        .footer-container {
    text-align: center;
    background-color: indianred;
    color: white;
}

.footer-container a {
    color: white;
}
    </style>
    @yield('style')
</head>
<body>
    @yield('navbar')
    @yield('content')
    <footer class="footer-container">
        <p>Copyright &copy; 2022, All Rights reserved</p>
        <a href="create.html">Post Jobs</a>
    </footer>
</body>
@yield('script')
</html>