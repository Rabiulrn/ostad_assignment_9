<!-- resources/views/partials/navbar.blade.php -->

<!-- <nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
         <li><a href="{{ route('about') }}">About Me</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contract') }}">Contact</a></li> 
    </ul>
</nav> -->
<nav>
         <div class="logo">
            Home
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         <li><a href="{{ route('home') }}">Home</a></li>
         <li><a href="{{ route('about') }}">About Me</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contract') }}">Contact</a></li> >
         </ul>
      </nav>