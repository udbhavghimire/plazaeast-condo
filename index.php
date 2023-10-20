<?php session_start();?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/silverBox.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title> Plaza East Condos - Calgary | Register Today</title>

    <meta name="title" content="Plaza East Condos - Calgary | Register Today">
    <meta name="description" content="Plaza East Condos by Truman is an upcoming pre construction condo development in Calgary">
    <meta name="keywords" content="Plaza East Condos Calgary , Plaza East Condos, Plaza East Condos Calgary, Truman, Pre construction in Calgary,  Condos in Calgary, Pre consruction condo Calgary">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <!-- <meta property="og:image" content="https://arborwesthome.ca/Arbor-West-Homes-Community.jpg"> -->
    <meta property="og:site_name" content="Plaza East Condos" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <link rel="manifest" href="/site.webmanifest">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Plaza East Condos",
            "url": "https://arborwesthome.ca/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
</head>

<body>

    <header class="header-transparent " id="header">

        <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
            <div class="container pt-2">
                <a href="/" class="navbar-brand">
                    <h2 class="navbar-brand">Plaza East Condos</h2>
                </a>
                <a href="#Contact" class="btn btn-outline-light fss d-block d-md-none">
                                    Register Now
            </a>
                <button class="d-none d-md-none btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z" fill="white" />
      </svg>
    </button>
                <div class="row me-0 row-cols-2 collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-12 d-flex justify-content-start justify-content-md-end">
                        <ul class="navbar-nav my-2 mb-lg-0 align-items-start align-items-md-center">
                            <!-- <li class="nav-item">
                                <a href="#hero" class="nav-link scrollto" aria-current="page">
              Home
            </a> -->
                            </li>
                            <!-- <li class="nav-item px-md-2">
                                <a class="nav-link scrollto" href="#about">About</a>
                            </li> -->

                            <!-- <li class="nav-item px-md-2">
                                <a class="nav-link scrollto" href="#gallery">Renderings</a>
                            </li> -->
                            <!-- <li class="nav-item px-md-2">
                                <a class="nav-link scrollto" href="#plans">Plans & Pricing</a>
                            </li> -->
                            <!-- <li class="nav-item px-md-2">
                                <a class="nav-link scrollto" href="#location">Location</a>
                            </li>
                            <li class="nav-item px-md-2">
                                <a class="nav-link scrollto" href="#faq">FAQ</a>
                            </li> -->

                            <li class="nav-item px-md-2 d-none d-md-block">
                                <a href="#Contact" class="btn btn-outline-light btn-lg fss">
                                    Register Now
            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <div class="background-color"></div>
            <video id="myvideo" class="w-100" preload="auto" loop autoplay muted playsinline><source src="images/Truman-bgmp4.mp4"></source></video>
            <div class="video-text">
                <h1 class="main-titlee pb-0  mb-0 mt-2 mt-md-0" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">Plaza East Condos</h1>
                <p class=" headline-textt mt-0 pt-3 text-white" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="50">Luxary Condo Coming Soon to Calgary </p>
            </div>
        </div>
    </section>

    <section>
        <div class="pt-5 " id="Contact">
            <div class="pt-5 mt-5 " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50">
                <div class="row mx-0 ">
                    <!-- <div class="text-center pt-3 ">
                        <img src="images/empire-logo.png " class="img-fluid regoimg " alt="Empire Communities Logo ">
                    </div> -->
                    <h6 class="text-center fs-1 fw-bold pt-3 register "> Register today</h6>
                    <div class="registertext px-4 d-flex justify-content-center align-items-center text-center ">
                        <p>Register today and get the first update on Plaza East Condos coming up in Calgary
                        </p>
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-3 mx-0 g-5 pb-md-5 ">
                    <div class="col-md-3 "></div>
                    <div class="col-md-6 px-md-5 ">

                        <form action="./contactForm.php" method="POST">
                            <div class="row ">
                                <div class="mb-3 "><input type="text" placeholder="Name" name="name" id="name" class="fields" required></div>

                            </div>
                            <div class="row row-cols-1 row-cols-sm-2 ">
                                <div class="col ">
                                    <div class="mb-3 "><input type="text" aria-describedby="emailHelp" placeholder="Phone" name="phone" id="phone" class="fields" required></div>
                                </div>
                                <div class="col ">
                                    <div class="mb-3 "><input type="text" aria-describedby="emailHelp" placeholder="Email" name="email" id="email" class="fields" required></div>
                                </div>
                            </div>
                            <div class="row me-0 row-cols-1">
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" name="realtor" id="realtor" aria-label="Floating label select example" required>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                            <label for="floatingSelect">Are you a realtor or working with one? </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class=" "><textarea name="message" id="message" placeholder="Enter your message" class="fields mess" required></textarea></div>
                            </div>
                            <div class="row ">
                                <p class=" text-muted sm-text text-center mt-0 ">*I consent to receive future communications about Plaza East Condos. I understand I can opt out at anytime by sending an email.</p>
                            </div>
                            <div class="row ">
                                <div class="col text-center ">
                                    <!-- <input type="submit " onclick="sendMail() " value="Send " class="btn call-btn btn-sm p-2 px-4 btn-lg "> -->
                                    <Button class="btn call-btn  p-2 px-4 btn-lg">Send</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="row-cols-md-3 "></div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-5 pt-3 ">
        <img loading="lazy " src="images/line.png " alt="Line image for character " class="img-fluid foot-up-img " />
    </div>
    <footer class="footerr py-5 mb-4 ">
        <div class="container ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 justify-content-between ">
                <div class="col-md-5 my-3 fotwidth center-sm px-4 px-md-0 ">
                    <p class=" ">
                        <h2 class="navbar-brand-foot fs-4"><a href="" target="_blank" class="text-dark text-decoration-none">Plaza East Condos </a></h2>
                    </p>
                    <span class=" justifyy ">
                    We do not represent the builder. Information provided on this website is gathered from publicly available websites. The information might not be updated and could include inaccurate or outdated information such as location, pricing, availability, floor plans etc. The logos, images and renderings might be protected by copyright owned by the builders.. Not intended to solicit those under contract with another brokerage. All inquiries will go to Dolphin Realty Inc., Brokerage.</span>
                    <div class="list pt-md-5 pt-3 d-md-block d-none ">
                        <p class=" ">
                        Website owned by <a href="https://dolphy.ca/ " target="_blank " class="text-dark text-decoration-none "><strong> Dolphy.ca</strong> </a>
                        </p>

                    </div>
                </div>

                <div class="col-md-4 py-md-5 py-5 center-sm px-md-5 px-5 ">
                    <div>
                        <h5 class="text-dark fw-bold mt-3 mb-3 ">About Plaza East Condos</h5>
                        <div class="list d-block ">
                            <p class="mybot pb-md-0 pb-0 ">
                                Builder : Truman
                            </p>
                            <p class="mybot pb-md-0 pb-0 ">
                                Address : Calgary
                            </p>
                            <p class="mybot pb-md-0 pb-0 ">
                                House Type : Condos
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-md-3 mt-sm-0 pt-4 center-sm d-flex justify-content-around align-items-center text-center ">
                    <img src="images/truman_logo_2019.png" class="img-fluid footer-logo " alt="Truman ">


                </div>
            </div>

            <div class="list mt-5 pt-5 d-md-none d-block center-sm px-4 ">
                <p class=" ">
                    Website owned by <a href="https://dolphy.ca/ " target="_blank " class="text-dark text-decoration-none "><strong> Dolphy.ca</strong> </a>
                </p>

            </div>

        </div>
    </footer>



    <script>
        // Change navbar background color on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('transparent-navbar');
                navbar.classList.add('solid-navbar', 'navbar-brand-sm');


            } else {
                navbar.classList.remove('navbar-brand-sm');
                navbar.classList.remove('solid-navbar');
                navbar.classList.add('transparent-navbar');

            }
        });
    </script>
    <script src="js/silverBox.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <?php
        if(
        isset($_SESSION['success'])
        ){
            ?>
    <script type="text/javascript" async>
       silverBox({
	title: {
		text: "Thank You",
		alertIcon: "success",
	},
	text: "Your Message has been received.\n We'll get back to you soon.",
});
    </script>
    <?php
            unset($_SESSION['success']);
        }

        if(
            isset($_SESSION['error'])
            ){
                ?>
    <script type="text/javascript" async>
           silverBox({
	title: {
		text: "Error",
		alertIcon: "error",
	},
	text: "Your Message has not been received.",
});
    </script>
    <?php
                unset($_SESSION['error']);
            }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>