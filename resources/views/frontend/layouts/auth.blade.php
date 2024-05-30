<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.elements.head')
</head>

<body>
<div class="container-xxl bg-white p-0">
    @include('frontend.layouts.elements.header')
    <!-- Spinner Start -->
    @yield('content')
    <!-- Back to Top -->
    @include('frontend.layouts.elements.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
</body>

</html>
