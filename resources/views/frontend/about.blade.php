<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
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
                        <div class="logo-wrapper">
                            <div class="logo text-left">Nepal Rental Association</div>
                        </div>
                        
                        <ul class="list-reset list-horizontal">
                            <li><a href="/committee">Committee</a></li>
                            <li><a href="/central_bank_message">Message From Central Bank</a></li>
                            <li><a href="/remmitance_overview">Remittance Overview in Nepal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar bg-primary">
                <div class="container">
                    <div class="menu-wrapper text-right pos-rel">
                        <button class="menu-trigger-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="menu invisible list-reset md-list-horizontal pos-abs md-visible md-pos-static">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/acts_and_regulations">Acts & Regulations</a></li>
                            <li><a href="/news_and_update">News & Update</a></li>
                            <li><a href="/team">Members</a></li>
                            <li><a href="/committee">Committee</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- header end -->

        <!-- article banner start -->
        <section class="article about-info hide-top-before section-padding-50">
            <div class="container">
                <div class="grid grid-cols-2 grid-gap-30 article-wrapper">
                    <article>
                        <span class="sub-title text-third">- About us</span>
                        <h1 class="text-primary site-title">About NRA</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi excepturi voluptates fugiat ipsam reprehenderit accusantium, eveniet ea sequi doloremque, voluptas nostrum nemo atque explicabo quam dolor est beatae placeat aperiam.</p>
                    </article>
                    <ul class="list-bullet bg-accent text-white">
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, amet.</li>
                        <li>Architecto a ex tempora, maxime iste delectus facilis nesciunt qui!</li>
                        <li>Fugit enim veniam excepturi inventore facilis sint eaque doloremque iste!</li>
                        <li>Ullam voluptatum aut eius tempora animi amet mollitia temporibus vitae?</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- article banner end -->
        
        <!-- news-list start -->
        <section class="news about-news section-padding-50">
            <div class="container">
                <div class="grid grid-cols-3 grid-gap-30">
                    <div class="card card--img-cover card--news pos-rel">
                        <figure class="pos-rel">
                            <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                        </figure>
                    </div>
                    <div class="news-list grid-span-2">
                        <article>
                            <span class="sub-title text-third">- News</span>
                            <h2 class="text-primary">Lorem ipsum dolor sit amet.</h2>
                        </article>
                        <div class="card card--news-list flex flex-cols-1-3 flex-items-center">
                            <figure>
                                <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                            </figure>
                            <article>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi nam, doloribus iure a natus numquam facilis adipisci! Quam harum repellat consectetur? Nihil recusandae quibusdam, cupiditate quidem enim veniam aspernatur amet!</p>
                            </article>
                        </div>
                        <div class="card card--news-list flex flex-cols-1-3 flex-items-center">
                            <figure>
                                <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                            </figure>
                            <article>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis magni perferendis earum illo quidem harum aspernatur facilis voluptates! Blanditiis, explicabo.</p>
                            </article>
                        </div>
                        <div class="card card--news-list flex flex-cols-1-3 flex-items-center">
                            <figure>
                                <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                            </figure>
                            <article>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, iusto.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-list end -->

        <!-- Ad start -->
        <section class="ad">
            <div class="container">
                <div class="grid grid-cols-2 grid-gap-10">
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                </div>
            </div>
        </section>
        <!-- Ad end -->

        <!-- article start -->
        <section class="article section-padding-50">
            <div class="container">
                <div class="grid grid-cols-2 grid-gap-30 article-wrapper bg-light-grey">
                    <article>
                        <span class="sub-title text-third">- Title</span>
                        <h2></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consequatur necessitatibus voluptatum tempora odit corporis?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo natus molestiae iusto incidunt quia veniam, explicabo vel repellat, ducimus qui ex expedita! Ipsa vel expedita fuga cumque libero officiis perspiciatis.</p>
                    </article>
                    <div class="mission-vision-article bg-accent">
                        <div class="misiosn text-white">
                            <div class="heading-horizontal">
                                <figure>
                                    <svg id="Capa_1" enable-background="new 0 0 511.335 511.335" height="512" viewBox="0 0 511.335 511.335" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m264.465 17.598c-39.501 0-78.442 9.517-113.341 27.604l-40.806-40.808c-3.609-3.611-8.809-5.137-13.797-4.051s-9.082 4.635-10.865 9.419l-20.606 55.289-55.288 20.605c-4.784 1.783-8.333 5.877-9.419 10.865-1.085 4.988.44 10.187 4.051 13.797l40.807 40.808c-18.087 34.898-27.604 73.839-27.604 113.34 0 136.124 110.744 246.869 246.868 246.869s246.87-110.745 246.87-246.869-110.746-246.868-246.87-246.868zm0 328.116c44.801 0 81.249-36.447 81.249-81.248s-36.448-81.248-81.249-81.248c-16.992 0-32.775 5.252-45.83 14.205l-37.717-37.717c22.931-18.324 51.98-29.299 83.547-29.299 73.92 0 134.059 60.139 134.059 134.059s-60.139 134.059-134.059 134.059-134.058-60.139-134.058-134.059c0-31.567 10.974-60.616 29.298-83.547l37.717 37.717c-8.953 13.055-14.205 28.838-14.205 45.83 0 44.8 36.448 81.248 81.248 81.248zm10.607-91.855-34.64-34.64c7.173-3.825 15.353-6.002 24.033-6.002 28.259 0 51.249 22.99 51.249 51.248s-22.99 51.248-51.249 51.248c-28.258 0-51.248-22.99-51.248-51.248 0-8.681 2.177-16.859 6.002-24.033l34.64 34.64c2.929 2.929 6.768 4.393 10.606 4.393 3.839 0 7.678-1.465 10.606-4.393 5.859-5.857 5.859-15.355.001-21.213zm-169.458-211.743 50.476 50.477-6.489 35.795-55.468-55.467zm-63.498 63.498 30.805-11.48 55.468 55.467-35.796 6.49zm222.349 375.721c-119.581 0-216.868-97.287-216.868-216.869 0-31.479 6.882-62.547 20.021-90.924l9.315 9.315c2.838 2.839 6.664 4.394 10.606 4.394.889 0 1.784-.079 2.676-.24l33.055-5.992c-14.514 24.465-22.862 52.997-22.862 83.447 0 90.462 73.596 164.059 164.058 164.059s164.059-73.597 164.059-164.059-73.597-164.059-164.059-164.059c-30.45 0-58.982 8.349-83.447 22.863l5.992-33.055c.877-4.84-.675-9.804-4.153-13.282l-9.315-9.315c28.376-13.139 59.444-20.021 90.924-20.021 119.582 0 216.869 97.287 216.869 216.868-.001 119.583-97.289 216.87-216.871 216.87z"/></svg>
                                </figure>
                                <h2>Vision & Mission</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quaerat, aspernatur voluptatem modi fuga quam! Voluptates fuga in quisquam ab cum libero similique et omnis, asperiores reiciendis maxime temporibus architecto?</p>
                        </div>
                        <div class="misiosn text-white">
                            <div class="heading-horizontal">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="line_icons" data-name="line icons" viewBox="0 0 74 74" width="512" height="512"><path d="M37,67.815A30.815,30.815,0,1,1,67.815,37,30.85,30.85,0,0,1,37,67.815Zm0-59.63A28.815,28.815,0,1,0,65.815,37,28.847,28.847,0,0,0,37,8.185Z"/><path d="M37,57.354A20.354,20.354,0,1,1,57.354,37,20.377,20.377,0,0,1,37,57.354Zm0-38.708A18.354,18.354,0,1,0,55.354,37,18.375,18.375,0,0,0,37,18.646Z"/><path d="M37,46.892A9.892,9.892,0,1,1,46.893,37,9.9,9.9,0,0,1,37,46.892Zm0-17.784A7.892,7.892,0,1,0,44.893,37,7.9,7.9,0,0,0,37,29.108Z"/><path d="M37,12.369a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0v8.369A1,1,0,0,1,37,12.369Z"/><path d="M37,72a1,1,0,0,1-1-1V62.631a1,1,0,0,1,2,0V71A1,1,0,0,1,37,72Z"/><path d="M71,38H62.631a1,1,0,0,1,0-2H71a1,1,0,0,1,0,2Z"/><path d="M11.369,38H3a1,1,0,0,1,0-2h8.369a1,1,0,0,1,0,2Z"/></svg>
                                </figure>
                                <h2>Goal & Objective</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quaerat, aspernatur voluptatem modi fuga quam! Voluptates fuga in quisquam ab cum libero similique et omnis, asperiores reiciendis maxime temporibus architecto?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article end -->
        
        <!-- Ad start -->
        <section class="ad">
            <div class="container">
                <div class="grid grid-cols-2 grid-gap-10">
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                </div>
            </div>
        </section>
        <!-- Ad end -->

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
                        <p><i class="fa fa-map-marker"></i> <span>Location Address</span></p>
                        <p><i class="fa fa-phone"></i> <span>+977-1291291</span></p>
                        <p><i class="fa fa-envelope"></i> <span>example@company.com</span></p>
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
                        <li><span>&copy; 2021 Nepal Rental Association | All right reserved.</span></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/core.js"></script>
</body>
</html>