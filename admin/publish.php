<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="icon" href="../img/educa/logo.png">

    <title>Publicar - Educa</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>



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
                                <h1 class="h4 text-gray-900 mb-4 text-uppercase">publicar</h1>
                            </div>
                            <form class="user">

                                <div class="form-group">
                                    <input type="text" id="title" class="form-control" placeholder="Título">
                                </div>

                                
                                <div class="form-group">
                                    <input type="text" id="author" class="form-control" placeholder="Autor" maxlength="50">
                                </div>

                                <div class="form-group ">
                                    <select class="browser-default custom-select " id="category ">
                                    <option selected>Seleciona categoria</option>
                                    <option value="technology ">Tecnologia</option>
                                    <option value="news ">Noticias</option>
                                    <option value="event ">Evento</option>
                                    <option value="workshops ">Workshops</option>
                                    <option value="other ">Outro</option>
                                    </select>
                                </div>



                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <img src="../img/educa/noimg.png" id="target" height="200" class="input-group-text" />
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" id="photo" aria-describedby="inputGroupFileAddon01"/>
                                                <label class="custom-file-label" for="photo">Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="form-group ">
                                    <label for="publication " class="text-uppercase ">Publicação</label>
                                    <textarea class="form-control " id="publication " rows="8 "></textarea>
                                </div>



                                </button>
                                <hr>


                            </form>
                            <button onclick="addPublication() " class="btn btn-user btn-block " style="background:#f8871f;border-radius:0px; color: white; ">
                                <i class="fab fa-sign-in fa-fw "></i> publicar
                            </button>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js "></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js "></script>


    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js "></script>
    <script src="../js/db/app.js "></script>
    <script src="../js/db/real-time-database.js "></script>
    <script>
        //add publication

        function addPublication() {
            var title = document.getElementById('title').value;
            var e = document.getElementById("category ");
            var category = e.options[e.selectedIndex].text;
            var text = document.getElementById("publication ").value;
            var date = new Date().toLocaleDateString();
            var author = document.getElementById('author').value;
            var uid = "<?php echo $_GET['id'] ; ?>";
            


            //upload img perfil
            const ref = firebase.storage().ref();
            const file = document.querySelector("#photo ").files[0];

            if (file != null) {

                const name = +new Date() + "-" + file.name;
                const metadata = {
                    contentType: file.type
                };
                const task = ref.child(name).put(file, metadata);
                task
                    .then(snapshot => snapshot.ref.getDownloadURL())
                    .then(url => {
                        addPublicationInDB(title, category, text, date, author, url,uid );
                    })
                    .catch(console.error);

            } else {
                addPublicationInDB(title, category, text, date, author, "",uid);
            }


        }

        function addPublicationInDB(title, category, text, date, author, img , uid) {
            var uidPublication = uuidv4();
            var data = {
                title: title,
                category: category,
                text: text,
                date: date,
                author: author,
                img: img,
                uid:uidPublication,
                author: author
            }


            firebase.database().ref().child('institution').child(uid).child("publication").child(uidPublication).set(data, function(error) {
                if (error) {
                    alert("Data could not be saved. " + error);
                } else {
                    window.location.replace("index.php?id=" + uid);
                }
            });



        }

        function showImage(src, target) {
            var fr = new FileReader();
            // when image is loaded, set the src of the image where you want to display it
            fr.onload = function(e) {
                target.src = this.result;
            };
            src.addEventListener("change", function() {
                // fill fr with image data    
                fr.readAsDataURL(src.files[0]);
            });
        }

        var src = document.getElementById("photo");
        var target = document.getElementById("target");
        showImage(src, target);



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