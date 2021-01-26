<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Title -->
    <title>Seja Bem-Vinda ao educa</title>

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
                        <img src="img/educa/brindes.png">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <a href="#" class="list-group-item list-group-item-action active">
                            SORTEIO DE PREMIOS
                        </a>


                        <?php 
                          
                          $show = false;
                          if(isset($_SESSION["data"])){
                            $show = false;
                        
                          }else{
                            $show = true;
                          }
                          
                        ?>

                        <?php if($show == true): ?>

                            <form method="post" action="sorteio/index.php">
                            <div class="form-group">

                                <input type="number" name="num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira um número">

                            </div>

                            <button id="btn" name="btn" class="btn btn btn-outline-info btn-lg btn-block">Sorteiar</button>

                        </form>

                        <?php endif; ?>
                       

                        <br>
                        <br>

                        <div class="contact-heading">
                            <h4>Usuários sorteados</h4>
                         </div>
                        <div class="contact_form">

                            <div class="list-group">


                                <?php
                                include_once('includes/dbconfig.php');
                                $ref = 'randGift';
                                $fetchdata = $database->getReference($ref)->getValue();
                                ?>

                                <?php
                                if($fetchdata != null):
                                foreach( $fetchdata as $key => $row):
                                ?>
                                    <a href="#" class="list-group-item list-group-item-action"> <?php echo $row['name']; ?> </a>

                                <?php
                                endforeach;
                                endif;
                                ?>
<!--                                <a href="#" class="list-group-item list-group-item-action active">-->
<!--                                    Cras justo odio-->
<!--                                </a>-->
<!--                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>-->
<!--                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>-->
<!--                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>-->
<!--                                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>-->
                            </div>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->


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
    
    <script>
    function addButton() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var contact = document.getElementById('contact').value;
    var genre = document.getElementById('genre').value;
    var date_of_birth = document.getElementById('date_of_birth').value;
    var category = document.getElementById('category').value;
    var residence = document.getElementById('residence').value;
    var userId = "aaa";
    var imageUrl = "ddd";

    firebase.auth().createUserWithEmailAndPassword(email, password )
    .then(function(data){
        userId = data.user.uid;
    
        create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence);
        
    //Here if you want you can sign in the user
    }).catch(function(error) {
        alert(""+error);
    //Handle error
});

}


function create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence) {
    var data = {
               userId:userId,
               name:name, 
               email:email, 
               password:password,
               imageUrl:imageUrl, 
               contact:contact,
               genre:genre, 
               date_of_birth:date_of_birth, 
               category:category,
               residence:residence
    };

    firebase.database().ref().child('users').child(userId).set(data , function(error){
            if (error) {
                alert("Data could not be saved." + error);
                location.href="intro.php";
            } else {
                location.href="index.php";
         }
    });
      
}


    function randomGift(){
        randomUser();
    }

    function randomUser(){
        var  gift = "";

        const dbRefResenas = firebase.database().ref('users')
        dbRefResenas.once("value")
            .then(function(snapshot){
              var max      = snapshot.numChildren();
              var min      = 0;
              var countSnap   = 0;

              var numberDrawn = Math.floor(Math.random() * (max - min) ) + min;

                snapshot.forEach(function (item) {
                    countSnap++;
                    console.log(item.val().name +"numberDrawn: "+numberDrawn );
                    if(countSnap == numberDrawn){
                        var uidRand = "<?php echo  date("Ymd")?>";
                        createRandUser(item.val().userId , item.val().name , gift , numberDrawn , uidRand);
                        return ;
                    }
                });

            });
    }


  //  genereteUIDIn();

    function genereteUIDIn(){
        const dbRefResenas = firebase.database().ref('institution')
        dbRefResenas.once("value")
            .then(function(snapshot){
                  snapshot.forEach(function (item) {
                    
                    console.log(item.val().institution_name +" link = educam.herokuapp.com//"+item.val().uid );

                    

        firebase.database().ref().child('institution').child(item.val().uid).child('phone').set('' , function(error){
            if (error) {
                console.log("error");
            } else {
                console.log("good");
            }
               
        });







                });

            });
    }



    function getRndInteger(min, max) {
        return Math.floor(Math.random() * (max - min) ) + min;
    }

    function randRoulette(){
        var data = {
            uid:uid,
            data:data,
            name:name
        };
    }

    function createRandUser(uid , name , gift , numRand , uidRand){
        var data = {
            uid:uid,
            name:name,
            gift:gift,
            numRand:numRand,
            uidRand:uidRand
        };

        firebase.database().ref().child('randGift').child(uidRand).set(data , function(error){
            if (error) {
                alert("Data could not be saved." + error);
                location.href="intro.php";
            } else {
                location.href="raffle.php";
            }
        });


    }

    </script>



</body>

</html>