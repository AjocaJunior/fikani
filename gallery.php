<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Educa - galeria</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

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
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="./img/educa/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <!-- <li><a href="speakers.html">Speakears</a></li> -->
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="#" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Admin<i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->

    <!-- Breadcrumb Area End -->

    <!-- Our Speakings Area Start -->

    <?php 
        include_once('includes/dbconfig.php');
        $ref = 'institution/';
        $fetchdata = $database->getReference($ref)->getValue();
        $uid  = $_GET['id'];

        if($uid == null || $uid == "") {
            header('Location: index.php');
        }
    ?>
    <section class="our-speaker-area section-padding-100 ">
        <div class="container ">
            <div class="row ">

            
            <?php
                $ref = 'institution/'.$uid.'/gallery';
                $fetchdata = $database->getReference($ref)->getValue();
           ?>
            <?php if($fetchdata != null):?>
            <?php
            foreach( $fetchdata as $key => $row): ?>


                <!-- Single Speaker Area -->
                <div class="col-12 col-sm-6 col-lg-4 " >
                            <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp " data-wow-delay="300ms ">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb " >
                            <img src="<?php echo $row['url']; ?>" alt=" " style="min-height: 300px; max-height: 350px;">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info ">                         
                            <a href="" type="button"  onclick="deleteImg('<?php echo $row['uid']; ?>')"  ><i class="zmdi zmdi-delete "></i></a>
                        </div>
                        <!-- Info -->
                        <!-- <div class="speaker-info ">
                            <h5>Albert Barnes</h5>
                            <p>Founder</p>
                        </div> -->
                    </div>
                </div>
         
            <?php endforeach ?>
            <?php endif?>

            </div>
        </div>
    </section>
    <!-- Our Speakings Area End -->

    <!-- Footer Area Start -->

    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->


    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js "></script>
    <!-- Popper -->
    <script src="js/popper.min.js "></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js "></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js "></script>
    <!-- Active -->
    <script src="js/default-assets/active.js "></script>

    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>

    <script>
       function deleteImg(uidImg) {
        
            firebase.database().ref().child('institution').child('<?php echo $uid; ?>').child("gallery").child(uidImg).remove()
                .then(function() {
                    window.location.reload();
            })
            .catch(function(error) {
            alert("Opsss ocoreu uma falha");
            });  
        }
    </script>

</body>

</html>