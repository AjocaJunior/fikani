<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastrar instituição - Educa</title>

   <!-- Favicon -->
   <link rel="icon" href="../img/educa/logo.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: #e9eef4">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 text-uppercase">Cadastrar Faculdade</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-12 mb-6 mb-sm-0">
                    <input type="text" id="college" class="form-control form-control-user" placeholder="Faculdade">
                  </div>
                </div>

                <button onclick="addCourse()" type="button" class="btn btn-lg btn-block" style="background:#f8871f;border-radius:0px; color: white;" >ADICIONAR FACULDADE</button>
                <br>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action active">
                    FACULDADE CADASTRADOS
                  </a>

                             <?php
                                 $id = '';
                                 if(isset($_GET['id'])) {
                                     $id = $_GET['id'];

                                 } else {
                                     header('Location: register.html');
                                 }

                                  include_once('../includes/dbconfig.php');
                                  $ref = 'institution/'.$id.'/college';

                                  $fetchdata = $database->getReference($ref)->getValue();

                                  ?>



                                 <?php if($fetchdata != null):?>
                                   <?php foreach( $fetchdata as $key => $row): ?>

                                        <a href="#" class="list-group-item list-group-item-action"><?php echo $row['college']; ?></a>

                                   <?php endforeach ?>


                                 <?php endif?>

                </div>

                <br>

                <?php $href = "add_gallery.php?id=".$_GET['id']; ?>
                <button type="button" onclick='window.location.href="<?php echo $href; ?>"' class="btn btn-link btn-lg btn-block">ADICIONAR FOTOS</button>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 

  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
  <script src="../js/db/app.js"></script>
  <script src="../js/db/real-time-database.js"></script>

  <script>


    function addCourse(){
      var college         = document.getElementById("college").value;
      var uid            = "<?php echo $_GET['id']; ?>";
      var uidCollege     = uuidv4();

      var data = {
        college : college,
        uid : uidCollege
      }

      firebase.database().ref().child('institution').child(uid).child("college").child(uidCollege).set(data , function(error){
        if (error) {
          alert("Data could not be saved." + error);
        } else {

           window.location.reload();
        }
      });
    }



    function uuidv4() { // Public Domain/MIT
    var d = new Date().getTime();//Timestamp
    var d2 = (performance && performance.now && (performance.now()*1000)) || 0;//Time in microseconds since page-load or 0 if unsupported
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16;//random number between 0 and 16
        if(d > 0){//Use timestamp until depleted
            r = (d + r)%16 | 0;
            d = Math.floor(d/16);
        } else {//Use microseconds since page-load if supported
            r = (d2 + r)%16 | 0;
            d2 = Math.floor(d2/16);
        }
        return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
    });
}

  </script>
</body>

</html>
