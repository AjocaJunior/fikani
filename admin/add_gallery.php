<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CADASTRO DE PRODUTO/SERVIÇO - FACIM</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/logos/facimicon.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: #e9eef4">

    <div class="text-center">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 text-uppercase">PRODUTO ou SERVIÇO</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-6 mb-sm-0">
                                        <input type="text" id="nome" class="form-control form-control-user"
                                            placeholder="Nome">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12 mb-6 mb-sm-0">
                                        <input type="text" id="preco" class="form-control form-control-user"
                                            placeholder="Preço (MZN)">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12 mb-6 mb-sm-0" style="margin-bottom:10px">
                                        <textarea type="text" rows="4" cols="50" id="description" class="form-control"
                                            placeholder="Descrição "></textarea>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="input-group mt-3">
                                            <div class="input-group-prepend">
                                                <img src="../img/logos/facimicon.png" height="38"
                                                    class="input-group-text" style="background-color:#f8871f" />
                                            </div>
                                            <div class="custom-file" >
                                                <input type="file" name="photo" class="custom-file-input" id="photo"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="photo">Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button onclick="uploadImage()" type="button"
                                    class="btn btn-secondary btn-lg btn-block">PUBLICAR</button>
                                <br>


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

    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>

    <script>
    var firebaseConfig = {
        apiKey: "AIzaSyCcU1JVVV7WU1vvlsKN-12_z80U-ncDsoI",
        authDomain: "educa-mozambique.firebaseapp.com",
        databaseURL: "https://educa-mozambique.firebaseio.com",
        projectId: "educa-mozambique",
        storageBucket: "educa-mozambique.appspot.com",
        messagingSenderId: "812293792882",
        appId: "1:812293792882:web:2cb3eb0096285cfdec0eeb",
        measurementId: "G-29BMBQ8P6Y"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    console.log(firebase);

    function uploadImage() {
        const ref = firebase.storage().ref();
        const file = document.querySelector("#photo").files[0];
        const name = +new Date() + "-" + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                console.log("1-" + url);
                setInDatabase(url);
                //document.querySelector("#image").src = url;
            })
            .catch(console.error);
    }

    function setInDatabase(url) {

        var description = document.getElementById("description").value;
        var uid = "<?php echo $_GET['id']; ?>";
        var uidImg = generateUUID();

        var data = {
            url: url,
            description: description,
            uid: uidImg
        }

        firebase.database().ref().child('institution').child(uid).child("gallery").child(uidImg).set(data, function(
            error) {
            if (error) {
                alert("Data could not be saved." + error);
            } else {
                alert("Adicionado com sucesso!");
                window.location.reload();
            }
        });

    }


    function generateUUID() { // Public Domain/MIT
        var d = new Date().getTime(); //Timestamp
        var d2 = (performance && performance.now && (performance.now() * 1000)) ||
        0; //Time in microseconds since page-load or 0 if unsupported
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16; //random number between 0 and 16
            if (d > 0) { //Use timestamp until depleted
                r = (d + r) % 16 | 0;
                d = Math.floor(d / 16);
            } else { //Use microseconds since page-load if supported
                r = (d2 + r) % 16 | 0;
                d2 = Math.floor(d2 / 16);
            }
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
    }
    </script>
</body>

</html>
