<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .navbar-nav-center {
            margin: 0 auto; /* Center the navigation menu */
        }
    </style>
</head>
<body class="" >
    @include('layouts.homenav')

    {{-- Image --}}
    <div id="carouselExampleCaptions" class="carousel slide mt-2">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- about Section --}}
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/b1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide Best Quality <br>Services Ever</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima veniam minus atque perspiciatis accusantium est velit explicabo molestiae rerum ullam, expedita possimus? Porro unde consectetur molestias incidunt eius architecto accusantium illo qui quod non maxime, ipsum repellendus adipisci. Qui modi facere quam nemo cupiditate distinctio magnam voluptatum enim beatae facilis, nostrum praesentium rem esse perspiciatis, similique blanditiis quas nisi dolore possimus perferendis architecto, dolor deleniti accusantium! Vitae enim distinctio fuga?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Seaction --}}
    <section id="services" class="services my-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam sunt laboriosam, nihil qui, voluptatibus ut ad cum aliquid laborum consequuntur nulla vero. Dolorum inventore eligendi voluptatibus exercitationem a quo vero.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="fa-solid fa-trophy"></i>
                            <h3 class="card-title">Best Quality</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nulla maxime officiis explicabo, sit quasi delectus similique deserunt eum vitae qui eligendi a alias voluptas dicta eius. Quis, quisquam ipsam.</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="fa-solid fa-heart"></i>
                            <h3 class="card-title">Best Quality</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nulla maxime officiis explicabo, sit quasi delectus similique deserunt eum vitae qui eligendi a alias voluptas dicta eius. Quis, quisquam ipsam.</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="fa-solid fa-star"></i>
                            <h3 class="card-title">Best Quality</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nulla maxime officiis explicabo, sit quasi delectus similique deserunt eum vitae qui eligendi a alias voluptas dicta eius. Quis, quisquam ipsam.</p>
                            <button class="btn btn-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- portfolio section --}}
    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Porjects</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates enim aspernatur ex odio, reprehenderit libero quia! Consequatur minus provident dolor, placeat, qui corrupti numquam magni, error aut quae neque dolorem!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/b1.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequatur quod ex ipsum, id eos quos, rerum deleniti eius quibusdam totam nobis. Ipsum autem animi alias maiores officiis ab voluptate!</p>
                            <button class="btn btn-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/b1.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequatur quod ex ipsum, id eos quos, rerum deleniti eius quibusdam totam nobis. Ipsum autem animi alias maiores officiis ab voluptate!</p>
                            <button class="btn btn-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/b1.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequatur quod ex ipsum, id eos quos, rerum deleniti eius quibusdam totam nobis. Ipsum autem animi alias maiores officiis ab voluptate!</p>
                            <button class="btn btn-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/b1.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consequatur quod ex ipsum, id eos quos, rerum deleniti eius quibusdam totam nobis. Ipsum autem animi alias maiores officiis ab voluptate!</p>
                            <button class="btn btn-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section-padding">
        <div class="container">
            <div class="section-header text-center pb-5">
                <h2>Our Team</h2>
            </div>
    
            <div class="team-grid">
                <div class="team-card">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <img src="img/man1.jpg" alt="Team Member" class="img-fluid rounded mb-3">
                            <h3 class="card-title py-2">Jack William</h3>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda.</p>
                            <div class="socials">
                                <a href="#" class="social-icon mx-2" title="Facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="Instagram">
                                    <i class="fa-brands fa-instagram-square"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="GitHub">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above "team-card" div for the other 4 cards -->
                <div class="team-card">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <img src="img/man1.jpg" alt="Team Member" class="img-fluid rounded mb-3">
                            <h3 class="card-title py-2">Jack William</h3>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda.</p>
                            <div class="socials">
                                <a href="#" class="social-icon mx-2" title="Facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="Instagram">
                                    <i class="fa-brands fa-instagram-square"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="GitHub">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <img src="img/man1.jpg" alt="Team Member" class="img-fluid rounded mb-3">
                            <h3 class="card-title py-2">Jack William</h3>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda.</p>
                            <div class="socials">
                                <a href="#" class="social-icon mx-2" title="Facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="Instagram">
                                    <i class="fa-brands fa-instagram-square"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="GitHub">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <img src="img/man1.jpg" alt="Team Member" class="img-fluid rounded mb-3">
                            <h3 class="card-title py-2">Jack William</h3>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda.</p>
                            <div class="socials">
                                <a href="#" class="social-icon mx-2" title="Facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="Instagram">
                                    <i class="fa-brands fa-instagram-square"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="GitHub">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <img src="img/man1.jpg" alt="Team Member" class="img-fluid rounded mb-3">
                            <h3 class="card-title py-2">Jack William</h3>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda.</p>
                            <div class="socials">
                                <a href="#" class="social-icon mx-2" title="Facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="Instagram">
                                    <i class="fa-brands fa-instagram-square"></i>
                                </a>
                                <a href="#" class="social-icon mx-2" title="GitHub">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- contact section --}}
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="display-4 text-primary">Contact Us</h2>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus enim dolore nobis odit esse. Delectus dolore vitae recusandae molestiae iste odio consequuntur quas, praesentium repellat excepturi pariatur corporis. Tenetur, modi.</p>
                </div>
            </div>
    
            <!-- Contact Form -->
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow-lg border-0">
                        <div class="card-body">
                            <!-- Full Name Input -->
                            <div class="mb-4">
                                <label for="full-name" class="form-label">Your Full Name</label>
                                <input type="text" id="full-name" class="form-control form-control-lg" required placeholder="Enter your full name">
                            </div>
    
                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" id="email" class="form-control form-control-lg" required placeholder="Enter your email">
                            </div>
    
                            <!-- Message Textarea -->
                            <div class="mb-4">
                                <label for="message" class="form-label">Your Query</label>
                                <textarea id="message" class="form-control form-control-lg" rows="6" placeholder="Write your message here..."></textarea>
                            </div>
    
                            <!-- Send Button -->
                            <div class="d-grid">
                                <button class="btn btn-warning btn-lg">Send Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- footer --}}
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Right Reserved @Websits</p>
        </div>
    </footer>
    
</body>
</html>
