<!DOCTYPE html>
<html lang="ar">

@include('frontend.includes.head')

<body>

@include('frontend.includes.header')

<div>
    @yield('body')
</div>

@include('frontend.includes.footer')
@include('frontend.includes.script')

</body>

</html>
