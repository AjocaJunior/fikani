<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Noticias - </title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->




    <?php  
    

    include_once('includes/dbconfig.php');
    $ref = 'institution/';
    $fetchdata = $database->getReference($ref)->getValue();
    $uid  = $_GET['id'];
    $chat = "";
    $title           = "";
    $localization    = "";
    $institution_description = "";
    $phone                   = "";
    $email                   = "";
    $website                 = "";
    $video_link              = "";
    $p1 = "";
    $p2 = "";
    $img1 = "";
    $img2 = "";
    $currentCategory = "";

    foreach($fetchdata as $key => $row){
        if($row['uid'] == $uid ){
          $chat = $row['chat'];
          $title           = $row['institution_name'];
          $localization    = $row['location'];
          $institution_description = $row['institution_description'];
          $img1                    = $row['img1'];
          $img2                    = $row['img2'];
          $phone                   = $row['phone'];
          $email                   = $row['email'];
          $website                 = $row['website'];
          $video_link              = $row['video_link'];
          $visits                  = $row['visits'];
          $contact                 = $row['contact'];
          $currentCategory         = $row['category'];

          break;
        }
    }

    $public = $_GET['public'];
    $ref = 'institution/'.$uid.'/publication';
    $fetchdata = $database->getReference($ref)->getValue(); 

    foreach($fetchdata as $key => $row){
        if($row['uid'] == $public ){
            $category = $row['category'];
            $date  = $row['date'];
            $img = $row['img'];
            $text = $row['text'];
            $titlePublic = $row['title'] ;
            $author = $row['author'];
        }

    }

    ?>



    <!-- Header Area Start -->
    <header class="header-area" style="background-color: #414c52;">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php"><img src="./img/educa/logo.png" alt=""></a>

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
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="<?php echo "institute.php?id=".$uid."#about" ?>">Sobre</a></li>

                                <li><a href="<?php echo "institute.php?id=".$uid."#contact" ?>">Contacto</a></li>
                            </ul>
                            <!-- ?php echo $uid; ?-->
                            <!-- Get Tickets Button -->

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

  
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img jarallax" style="background-color: #f2871c;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title"><?php echo $title ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog.php?id=<?php echo $uid ?>"><?php echo $title ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $titlePublic ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


    <!-- Blog Area Start -->
    <section class="confer-blog-details-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="pr-lg-4 mb-100">
                        <!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <img src="<?php  echo $img;?> " alt=" " style="width: 600px; height:380px; ">
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title "><?php echo $title; ?></h4>

                              <!-- Post Meta -->
                              <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> <?php echo $date; ?> </a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>  <?php echo $author; ?> </a>
                                <!-- <a class="post-author" href="#"><i class="zmdi zmdi-favorite-outline"></i> 8 Likes</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-comment-outline"></i> 12 Comments</a> -->
                            </div>


                            <p style="white-space: pre-line"><?php echo $text; ?></p>
                     
                            </div>


                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="confer-sidebar-area mb-100 ">

                       

                        <!-- Single Widget Area -->
                        <div class="single-widget-area ">
                            <!-- Post Author Widget -->
                            <div class="post-author-widget ">
                                <!-- Thumbnail -->
                                <div class="post-author-avatar ">
                                    <img src="<?php echo $img; ?>" alt=" " style="width: 107px; height: 107px;">
                                </div>
                                <!-- Author Content -->
                                <div class="post-author-content ">
                                    <h5><?php echo $title; ?></h5>
                                    <?php
                                        
                                        if($currentCategory == 1){
                                            $currentCategory = "Empresa";
                                        }else{
                                            $currentCategory = " Instituição de ensino";
                                        }
                                    
                                    ?>
                                    <span><?php echo $currentCategory ?></span>
                                    <p> <?php  echo substr($institution_description , 0 , 43).".."; ?></p>
                                </div>
                                <!-- Social Info -->
                                <div class="author-social-info ">
                                    <a href="institute.php?id=<?php echo $uid ?> "><i class="zmdi zmdi-home "></i></a>
                                    <a href="blog.php?id=<?php echo $uid ?> "><i class="zmdi zmdi-collection-text "></i></a>
                                    <a href="institute.php?id=<?php echo $uid ?> "><i class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area ">
                            <h5 class="widget-title mb-30 ">Publicações recentes</h5>


  


                    <?php 
                        $ref = 'institution/'.$uid.'/publication';
                        $fetchdata = $database->getReference($ref)->getValue(); 
                    ?>

                    <?php if($fetchdata != null):?>
                    <?php foreach( $fetchdata as $key => $row):   ?>

                     <!-- Single Recent Post Area -->
                     <div class="single-recent-post-area d-flex align-items-center">
                        <!-- Thumb -->
                        <div class="post-thumb">
                            <a href="single-blog.php?id=<?php echo $uid. "&" ."public=".$row['uid'] ?>"><img src="<?php echo $row['img']; ?>" alt=""></a>
                        </div> 
                        <!-- Content -->
                        <div class="post-content">
                            <?php  
                                $currentTitle = "";
                                 if(strlen($row['title']) > 17) {
                                     $currentTitle = substr( $row['title'] , 0 , 17)."..";
                                 } else {
                                     $currentTitle = $row['title'];
                                 }
                            
                            ?>
                            <a href="single-blog.php?id=<?php echo $uid. "&" ."public=".$row['uid'] ?>" class="post-title"> <?php echo $currentTitle; ?> </a>
                            <a href="#" class="post-date"><i class="zmdi zmdi-time"></i>  <?php echo $row['date']; ?> </a>
                        </div>
                    </div>
                 
                <?php endforeach ?>
            <?php endif?>


                            
                            



                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- Footer Area Start -->
    <!-- Footer Area Start -->
    <footer class="footer-area bg-img section-padding-100-0" style="background:#414c52">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->

                    <!-- Copywrite Area -->
                    <div class="container">
                        <div class="copywrite-content">
                            <div class="row">
                                <!-- Copywrite Text -->
                                <div class="col-12 col-md-6">
                                    <div class="copywrite-text">
                                        <p style="color:white;">
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script> EDUCA MOÇAMBIQUE</a>
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

</body>

</html>