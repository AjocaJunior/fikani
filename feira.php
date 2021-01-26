<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--Floating WhatsApp css-->
    <link rel="stylesheet" href="floating-whatsapp/floating-wpp.min.css">

    <!-- Title -->
    <title>FACIM - FEIRA</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/logos/facimicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->
    
    <!-- Header Area Start -->
    <header class="header-area">
            <!--Div where the WhatsApp will be rendered-->
<div id="WAButton"></div>
        <div class="classy-nav-container breakpoint-off" style="background:#414c52">
            <div class="container">
             
                <nav class="classy-navbar justify-content-between" id="conferNav">

               
                    <a class="nav-brand" href="./index.html"><img src="./img/logos/facimicon.png" alt=""></a>

                  
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                   
                    <div class="classy-menu">
                        
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                      
                        <div class="classynav">
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.php">Inicio</a></li>
                                    <li><a href="evento.html">Evento</a>
                                        <ul class="dropdown">
                                            <li><a href="evento.html#abertura">Abertura</a></li>
                                            <li><a href="evento.html#conferencias">Conferências</a></li>
                                            <li><a href="evento.html#webinares">Webinares</a></li>
                                            <li><a href="evento.html#encerramento">Encerramento</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="feira.php">Feira</a>
                                    <ul class="dropdown">
                                        <li><a href="feira.php#testes">Testes</a></li>
                                    </ul>
                                    </li>
                                  
                                    <li><a href="informacoes-diversas.html">Informações</a>
                                    <ul class="dropdown">
                                        <li><a href="informacoes-diversas.html#calendario">Calendário</a></li>
                                        <li><a href="informacoes-diversas.html#bolsas">Bolsas</a></li>
                                    </ul>
                                </li>
                                    <li><a href="#contact">Contactos</a></li>
                                </ul>

                                <a href="perfil/profile.html" class="btn confer-btn-white mt-3 mt-lg-0 ml-3 ml-lg-5" id="user-name">Perfil<i
                                        class="zmdi zmdi-sign-in"></i></a>
                            </div>
                            <!-- Nav End -->
                        </div>
                </nav>
            </div>
        </div>
    </header>

  
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <!-- <section class="breadcrumb-area bg-img jarallax"
        style="background-color:#f8871f;">
    
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12"> -->
                    <!-- <div class="breadcrumb-content">
                        <h2 class="page-title">Feira</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Feira</li>
                            </ol>
                        </nav>
                    </div> -->



                    <!-- <div class="call-to-action-content text-center" style="margin-down:0px;">
                        <div class="call-to-action-heading">
                            <h6 style="font-size:10;">É estudante e quer saber qual é a sua vocação? Faça o Teste de
                                Orientacão Vocacional </h6>

                        </div>
                        <a href="teste-vocacional/index.html" target="_blank" class="btn confer-btn-white-2 mt-40"
                            onclick="">Iniciar o Teste <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div> -->


                <!-- </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Area End -->


  

    <section id="blog" class="our-blog-area section-padding-100-60" style="background-color:#e9eef4 ;">
        <div class="container">
            <div class="row" style="text-align:center">
                <?php
                include_once('includes/dbconfig.php');
                $ref = 'institution/';
                $fetchdata = $database->getReference($ref)->getValue();
                $count = 0;
                ?>


                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" style="margin-top:20px; margin-bottom:-2px;"  data-wow-delay="300ms">
                        <p>EXPOSIÇÕES</p>
                        <h5>Sector de Telecomunicações</h5>
                    </div>
                </div>
                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    if ($count == 5){
                        break;
                    }
                    
                ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-blog-area wow fadeInUp text-center " data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb text-center">
                            <a href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>">

                                <img src="<?php echo $row['img1']; ?>"
                                    style="height:200px;width:100%; background:white; text-align:center;" alt="">
                            </a>
                        </div>
                        <div class="single-blog-text text-center">

                            <?php
                              $title = "";

                              if(strlen($row['institution_name']) > 20){
                                  $title = substr($row['institution_name'],0, 30)."...";
                              }else{
                                  $title = $row['institution_name'];
                              }
                             
                             ?>
              
                            <a class=""  href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>"><?php echo $title; ?></a>
                            <!-- Post Meta -->


                        </div>
                        <div class="blog-btn" >
                            <a href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>"><i
                                    class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>


                </div>
                <?php
                endforeach;
                ?>
                
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" style="margin-top:10px; margin-bottom:-2px"  data-wow-delay="300ms">
                        
                        <h5>Pavilhão de Portugal</h5>
                    </div>
                </div>
                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    if ($count == 3){
                        break;
                    }
                    
                ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-blog-area wow fadeInUp text-center " data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb text-center">
                            <a href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>">

                                <img src="<?php echo $row['img1']; ?>"
                                    style="height:200px;width:100%; background:white; text-align:center;" alt="">
                            </a>
                        </div>
                        <div class="single-blog-text text-center">

                            <?php
                              $title = "";

                              if(strlen($row['institution_name']) > 20){
                                  $title = substr($row['institution_name'],0, 30)."...";
                              }else{
                                  $title = $row['institution_name'];
                              }
                             
                             ?>
              
                            <a class=""  href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>"><?php echo $title; ?></a>
                            <!-- Post Meta -->


                        </div>
                        <div class="blog-btn" >
                            <a href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>"><i
                                    class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>


                </div>
                <?php
                endforeach;
                ?>

            </div>
            
      
                

        </div>
    </section>

    <!-- Call to Action Area Start -->
    <section class="call-to-action-area bg-img jarallax section-padding-100"
        style="background-color:#f8871f;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <div class="call-to-action-heading">
                            <h6>Contacto com o Psicológico</h6>
                            <h2>SOS Psique on-line
                            </h2>
                        </div>
                        <!-- <div class="event-time">
                            <p><i class="zmdi zmdi-alarm-check"></i> 2-14 Jan 2019</p>
                            <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                        </div> -->
                    </div>

                    <div class="ticket-btn text-center">
                        <a href="https://wa.me/258833642642/?text=Oi Psique" target="_blank" class="btn confer-btn-white-2 mt-40">Iniciar o contacto <i
                                class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Call to Action Area End -->
    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" style="background:#414c52">
        <!-- Main Footer Area -->


        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i>
                                por <a href="https://www.educa.co.mz" target="_blank">Educa</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <!-- Footer Menu -->

                </div>
            </div>
        </div>
    </footer>
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


    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script>
    firebase.auth().onAuthStateChanged(function(user) {

        if (user) {

            firebase.database().ref('users').on('value', function(snapshot) {
                snapshot.forEach(function(item) {

                    if (item.val().userId !== null && user.uid !== null) {
                        var db_uid = item.val().userId.toString().trim();
                        var user_uid = user.uid.toString().trim();

                        if (db_uid == user_uid) {
                            var user_name = document.getElementById("user-name");
                            user_name.innerHTML = item.val().name;
                            return;
                        }

                    }

                });
            });

        } else {
            location.href = 'intro.php';
        }

    });
    </script>

    <!--Floating WhatsApp javascript-->
    <script type="text/javascript" src="floating-whatsapp/floating-wpp.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!--JQuery-->
    <script type="text/javascript" src="floating-whatsapp/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="floating-whatsapp/floating-wpp.js"></script>

    <script type="text/javascript">
    $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: '+258833642642', //WhatsApp Business phone number
            headerTitle: 'FACIM Online Chat', //Popup Title
            popupMessage: 'Olá, como podemos lhe ajudar?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="floating-whatsapp/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "left" //Position: left | right

        });
    });
    </script>
</body>

</html>
