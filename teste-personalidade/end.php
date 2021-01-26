<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Resultado do Teste</title>
  <link rel="icon" href="../img/educa/logo.png">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="app.css" /> -->
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="container section-padding-50">
    <div id="end" class="text-center">
      <!-- <h3 id="">O resultado está a ser calculado!</h3> -->

      <h6 id="sinceSes" style="font-weight: 400;"></h6>
      <h6 id="timidezSes" style="font-weight: 400;"></h6>
      <h6 id="activSes" style="font-weight: 400;"></h6>
      <h6 id="introSes" style="font-weight: 400;"></h6>
      <h6 id="neuroSes" style="font-weight: 400;"></h6>
      <h6 id="esquiSes" style="font-weight: 400;"></h6>
      <h6 id="depreSes" style="font-weight: 400;"></h6>
      <h6 id="epileSes" style="font-weight: 400;"></h6>
      <h6 id="psicoSes" style="font-weight: 400;"></h6>
      <div class="mt-30">
        <h6><strong>NOTA: </strong> Este teste é uma base para poder entender um pouco sobre sua personalidade, para saber mais sobre si, entre em contacto connosco clicando no botão seguinte.</h6>
        
        <a class="btn confer-btn-white" href="../index.php">Fase 2 do Teste<i class="zmdi zmdi-mood"></i></a>
        <br>
        <a class="btn confer-btn-white mt-30" href="../index.php">Menu Principal<i class="zmdi zmdi-home"></i></a>
      </div>

    </div>
    <div class="row">
      <div class="col-12 ">
        <div class="our-sponsor-area d-flex justify-content-center  ">
          <div class=" wow" style="width: 10%; height: 10%;">
           <a href="#">

           <img src="../img/logos/UEMLOGO.png" class="" alt=""></a>
          </div>
          <div class="wow" style="width: 30%; height: 30%;">
            <a href="#"> <img src="../img/logos/NewCADELogoSlogan.png" class="" alt=""></a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="end.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
  <script src="../js/db/real-time-database.js"></script>
  <script src="../js/db/app.js"></script>

<script>


   function uuidv4() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }
</script>

</body>

</html>
