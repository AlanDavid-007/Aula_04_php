<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo"Aula Senac"?></title>
        <!--My links-->
        <script src="../Jquery/js/scripts.js"></script>
        <link href="css/styles.css" rel="stylesheet" /> 
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->    
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    <?php echo "Senac Class"?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <?php echo "Menu"?>
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php"><?php echo "Services"?></a></li>
                        <li class="nav-item"><a class="nav-link" href="index_portfolio.php"><?php echo "Portfolio"?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"><?php echo "About"?></a></li>
                        <li class="nav-item"><a class="nav-link" href="index_team.php"><?php echo "Team"?></a></li>
                        <li class="nav-item"><a class="nav-link" href="index_contact.php"><?php echo "Contact"?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo "Welcome To Our Class"?> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                    <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                  </svg></div>
                <div class="masthead-heading text-uppercase"><?php echo "It's Nice To Meet You"?></div>
                <a class="btn btn-primary btn-lg" id="color"  href="#about" style="background-image: linear-gradient(to right top, #5000e9, #3b33f1, #244af6, #085df8, #006df9);"><?php echo"Tell Me More"?> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></a> 
            </div>
        </header>
        <!-- About-->
         <!--MyCarousel-->
         <section id="about">
         <div class="container-lg my-3">
            <div id="myCarousel" class="carousel slide">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
            
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/map-img.jpg" class="d-block w-100" alt="Slide 1">
                        <div class="container">
                            <div class="carousel-caption text-start">
                            <h1><?php echo "Example headline."?></h1>
                            <p><?php echo "Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur."?></p>
                            <p><a class="btn btn-info btn-lg" id="linkButton"><?php echo "Click me!"?></a></p>
                            </div>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/map-img.jpg" class="d-block w-100" alt="Slide 2">
                        <div class="container">
                            <div class="carousel-caption text-start">
                            <h1><?php echo "Example headline."?></h1>
                            <p><?php echo "Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur."?></p>
                            <p><?php echo "Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur."?></p>
                            </div>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/map-img.jpg" class="d-block w-100" alt="Slide 3">
                        <div class="container">
                            <div class="carousel-caption text-start">
                            <h1><?php echo "Example headline."?></h1>
                            <p><?php echo "Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur."?></p>
                            <p><?php echo "Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur."?></p>
                             </div>
                          </div>
                    </div>
                </div>
            
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4" style="background-color: #343a40; color: white;">
            <div class="container"  style="color: white;">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start"><?php echo "Copyright &copy; Alan's Website 2021"?></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link text-decoration-none me-3" href="#!"><?php echo "Privacy Policy"?></a>
                        <a class="link text-decoration-none" href="#!"><?php echo "Terms of Use"?></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
