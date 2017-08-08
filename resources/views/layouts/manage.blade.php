<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials._head')
<body>
    <div id="app">
        @include('partials._nav') 
        @include('partials._nav_manage') 


        <div class="container"> 
          @yield('content')  
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
