<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- CDN Library -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core CSS Links -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="site-wrapper">
        <!-- header start -->
        <header class="header pos-rel z-2">
            <nav class="top-bar">
                <div class="container">
                    <div class="grid grid-cols-2 gird-gap-30">
                        <div class="logo-wrapper ">
                            <a href="/" class="flex flex-wrap flex-row flex-items-start w-full">
                                <div class="logo text-left">Nepal Remitters Association</div>
                                <img class="" logo"="" src="http://nra.org.np/assets/image/nra-logo.png" height="100px">
                            </a>
                        </div>
                        <button class="menu-trigger-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        <nav class="menu-wrapper invisible  text-right">

                            <ul class="list-reset list-horizontal  bg-primary">
                                <li class="{{$title == 'Committee' ? 'active' : ''}}"><a href="/committee">Committee</a></li>
                                <li class="{{$title == 'Message' ? 'active' : ''}}"><a href="/central_bank_message">Message From Central Bank</a></li>
                                <li><a href="/remmitance_overview">Remittance Overview in Nepal</a></li>
                            </ul>
                            <ul class="menu list-reset md-list-horizontal pos-abs md-visible md-pos-static flex-content-end bg-primary" >
                                <li class="{{$title == 'Home' ? 'active' : ''}}"><a href="/">Home</a></li>
                                <li class="{{$title == 'Gallery' ? 'active' : ''}}"><a href="/gallery">Gallery</a></li>
                                <li class="{{$title == 'Acts' ? 'active' : ''}}"><a href="/acts_and_regulations">Acts & Regulations</a></li>
                                <li class="{{$title == 'News' ? 'active' : ''}}"><a href="/news_and_update">News & Update</a></li>
                                <li class="{{$title == 'Member' ? 'active' : ''}}"><a href="{{route('welcome.member')}}">Members</a></li>
                                <li class="{{$title == 'Committee' ? 'active' : ''}}"><a href="/committee">Committee</a></li>
                                <li class="{{$title == 'About' ? 'active' : ''}}"><a href="/about">About</a></li>
                                <li class="{{$title == 'Contact' ? 'active' : ''}}"><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>
            <!-- <nav class="navbar">
                <div class="container">
                    <div class="menu-wrapper text-right pos-rel">
                        <button class="menu-trigger-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        
                    </div>
                </div>
            </nav> -->
        </header>
        <!-- header end -->
        <!-- Banner start -->
        @yield('content')
        <!-- Subscribe start -->
        <section class="subscribe">
            <div class="container">
                <div class="grid grid-cols-2">
                    <article class="bg-secondary pa-20">
                        <h2 class="text-white">Become NRA Member</h2>
                    </article>
                    <article class="bg-third pa-20 text-center">
                        <a href="#" class="btn btn-white btn-outline text-white">Register Now</a>
                    </article>
                </div>
            </div>
        </section>
        <!-- Subscribe end -->

        <!-- Client start -->
        <section class="client section-padding-50">
            <div class="container">
                <div class="grid grid-cols-5 grid-gap-15">
                    <figure class="client__img">
                        <img src="https://www.logodesign.net/logo/arrow-graph-and-globe-stand-4275ld.png" alt="client logo" class="circle">
                    </figure>
                    <figure class="client__img">
                        <img src="https://www.logodesign.net/logo/arrow-graph-and-globe-stand-4275ld.png" alt="client logo" class="circle">
                    </figure>
                    <figure class="client__img">
                        <img src="https://www.logodesign.net/logo/arrow-graph-and-globe-stand-4275ld.png" alt="client logo" class="circle">
                    </figure>
                    <figure class="client__img">
                        <img src="https://www.logodesign.net/logo/arrow-graph-and-globe-stand-4275ld.png" alt="client logo" class="circle">
                    </figure>
                    <figure class="client__img">
                        <img src="https://www.logodesign.net/logo/arrow-graph-and-globe-stand-4275ld.png" alt="client logo" class="circle">
                    </figure>
                </div>
            </div>
        </section>
        <!-- Client end -->

        <!-- Footer start -->
        <footer class="footer bg-secondary section-padding-50 pos-rel">
            <div class="container">
                <div class="grid grid-cols-3 grid-gap-30">
                    <div class="logo-wrapper">
                        <!-- <img src="" alt=""> -->
                        <div>Logo Here</div>
                    </div>
                    <div class="address-wrapper">
                        <h3>Address</h3>
                        <p><i class="fa fa-map-marker"></i> <span>Kamalpokhari, Kathmandu, Nepal</span></p>
                        <p><i class="fa fa-phone"></i> <span>+977-1-4433166</span></p>
                        <p><i class="fa fa-envelope"></i> <span>contact@nra.org.np</span></p>
                    </div>
                    <div class="social-links">
                        <h3>Get In Touch</h3>
                        <ul class="social-list list-horizontal">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center footer__bottom">
                    <ul class="list-horizontal">
                        <li><span>&copy; 2021 Nepal Remitters Association | All right reserved.</span></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-overlay bg-white pos-abs"></div>
        </footer>
        <!-- Footer end -->
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="assets/js/core.js"></script>
</body>
</html>