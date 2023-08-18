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
    bottom: 0;
    margin: 0;  
    width: 100%;
    position: fixed;
}

.footer-container a {
    color: white;
}
    </style>
    @yield('style')
</head>
<body style="margin: 0px;">
    @yield('navbar')
    @yield('content')
    <footer class="footer-container">
        <p>Copyright &copy; 2022, All Rights reserved</p>
        {{-- link for create job list --}}
        <a href="{{ route('registration') }}">Post Jobs</a>
    </footer>
</body>
<script src="//unpkg.com/alpinejs" defer></script>
@yield('script')
</html>