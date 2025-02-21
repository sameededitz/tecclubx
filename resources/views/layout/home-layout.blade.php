<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.home.head')
</head>

<body>
    <!-- Preloader Start -->
    <div class="loader">
        <span class="loader-container"></span>
    </div>
    <!-- Preloader End -->

    @include('partials.home.top-bar')

    @include('partials.home.navbar')

    @yield('home_content')

    @include('partials.home.footer')

    <!-- Scroll Btn Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Scroll Btn End -->

    @include('partials.home.scripts')

    <script>
        $('.alert .remove-button').on('click', function() {
            $(this).closest('.alert').addClass('d-none')
        });
    </script>

    <script>
        AOS.init({
            duration: 800, // Animation duration (milliseconds)
            once: true, // Animation only once
        });
    </script>
    @yield('home_scripts')
</body>

</html>
