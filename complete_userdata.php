<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Cadatre</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
   <?php session_start(); ?>
    <!-- Header Area Start -->
    
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg); height: 100px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <div class="col-12 col-lg-6">
                    <div class="contact-us-thumb mb-100">
                        <img src="img/bg-img/44.jpg" alt="">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading card-header">
                            <h4>Complete seus dados</h4>
                        </div>
                        <div class="contact_form">
                            <form action="process.php" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                       
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="province" id="province" placeholder="Provincia" required>
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="neighborhood" id="neighborhood" placeholder="Bairo" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="contact" id="contact" placeholder="Contacto" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <select class="browser-default custom-select" name="genre">
                                                    <option selected >Genero</option>
                                                    <option value="Femenina">Femenina</option>
                                                    <option value="Masculina">Masculina</option>
                                                    <option value="Outros">Outros</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="school" id="school" placeholder="Nome da sua escola" required>
                                            </div>
                                        </div>
                                         <!-- Form Group -->
                                         <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <select class="browser-default custom-select" name="college">
                                                    <option selected>Faculdade(opcional)</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                        </div>
                                        
                                        <!-- Form Group -->
                                        
                                        <!-- Button -->
                                       
                                        <div class="col-12">
                                            <button type="complete_data" name="complete_data" class="btn btn-primary btn-lg btn-block">Registar <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                        
                

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

    
  
   

    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>