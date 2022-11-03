<header id="header">
    <div class="inner">

        <!-- Logo -->
        <a href="{{route('home')}}" class="logo">
            <span class="title">Fintax</span>
        </a>

        <!-- Nav -->
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
            </ul>
        </nav>

    </div>
</header>

<!-- Sidebar -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>

        <li><a href="{{route('service')}}">Services</a></li>

        <li><a href="{{route('consulting')}}">Consulting</a></li>

        <li><a href="{{route('aboutus')}}">About Us</a></li>

        <li><a href="{{route('testimonials')}}">Testimonials</a></li>

        <li><a href="{{route('contactus')}}">Contact Us</a></li>
    </ul>
</nav>