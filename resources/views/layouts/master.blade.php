<!DOCTYPE html>
<html lang="en">

<head>

    @include('include.head')

</head>

<body>

    <!-- Navigation -->

    @include('include.nav')
  
    <!-- Navigation -->

    <!-- Maincontent -->

     @yield('content')

    <!-- Maincontent -->
    <hr>

    <!-- Footer -->
    <footer>
        @include('include.footer')
    </footer>

    
    <!-- Script -->
    @include('include.script')

</body>

</html>
