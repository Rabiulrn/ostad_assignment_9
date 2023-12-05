<!-- master.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Add your common head elements here -->
        <!-- Debugging line -->
        {{--    <p>Generated URL: {{ asset('css/styles.css') }}</p> --}}
    
</head>
<body>
    <header>
        <!-- Navigation Bar -->
        @include('../partials.navbar') 
        <!-- //sob page a jate navbar pay ai jonno ai jaygay rakha hoise. -->
    </header>

    <main>
        <!-- Content Area -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
        @include('partials.footer')
    </footer>
</body>
</html>