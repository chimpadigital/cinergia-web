<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cinergia | Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- css -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        <?php include 'includes/navbar.php';?>
        <div class="flashlight-mouse">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="index.php"><img src="assets/img/logo-cinergia-home.svg" width="220px" alt=""></a>
                        </div>
                        <div class="col-md-10 d-flex justify-content-end d-none d-md-flex">
                            <ul class="d-flex align-items-center">
                                <li><a href="portfolio.php" class="fc-pastel Valky fs-24 me-4">Trabajos</a></li>
                                <li><a href="contacto.php" class="fc-pastel Valky fs-24">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row vh-80 d-flex align-items-center text-center text-md-start">
                        <div class="col-12">
                            <h3 class="fc-pastel mb-0">Buenas Historias</h3>
                            <h3 class="fc-pastel Valky">Mejores Marcas</h3>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        
        <div class="container-fluid bg-negro">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center p-0">
                    <img src="assets/img/bg-spaceship.png" width="100%" alt="">
                    <a class="lottie-player" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_jgjms53k.json"  background="transparent"  speed="1" loop autoplay></lottie-player>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/lbisciMm7VQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 mt-4 mb-4">
                    <img src="assets/img/bg-divider.svg" width="100%" alt="">
                </div>
            </div>
        </div>
        
        <!-- js -->
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
        <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>
            function update(e){
            var x = e.clientX || e.touches[0].clientX
            var y = e.clientY || e.touches[0].clientY

            document.documentElement.style.setProperty('--cursorX', x + 'px')
            document.documentElement.style.setProperty('--cursorY', y + 'px')
            }

            document.addEventListener('mousemove',update)
            document.addEventListener('touchmove',update)
        </script>
    </body>
</php>