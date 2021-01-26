<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Seja Bem-Vindo à Facim Digital</title>

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

    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img jarallax"
        style="background-image: url(img/bg-img/fundosimples.png); height: 50px;">
        <div class="container ">
            <div class="row  align-items-center">
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
                  
                        <img src="img/bg-img/businessmanfacim.jpg" alt="">
                    
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Seja Bem-Vindo à FACIM DIGITAL</h4>
                            <p>Ao inscrever-se a Feira Internacional de Maputo, manter-se-á mais perto das nossas actividades e
                                eventos, assim como poderá ter diversas oportunidades de formação dentro e fora de
                                Moçambique. Ligar-se a nós ficou mais fácil através dessa janela.</p>
                        </div>
                        <div class="contact_form">
                            <form>
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name"
                                                    placeholder="nome completo">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <select class="browser-default custom-select" name="genre" id="genre">
                                                    <option selected>Género</option>
                                                    <option value="Estudante">M</option>
                                                    <option value="Pai ou encarregados de Educação">F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <select class="browser-default custom-select" onchange="changeUiByCategory(this.selectedIndex)" id="category">
                                                    <option selected>Seleciona categoria</option>
                                                    <option value="Estudante">Estudante</option>
                                                    <option value="Pai ou encarregados de Educação">Pai ou encarregados de Educação</option>
                                                    <option value="Outro">Outro</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30 textbox-n"
                                                    onfocus="(this.type='date')" name="date_of_birth" id="date_of_birth"
                                                    placeholder="Data de nascimento">
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6" id="level_of_schoolingDiv">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="level_of_schooling"
                                                    id="level_of_schooling" placeholder="Nível académico">
                                            </div>
                                        </div>

                                        
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6" id="schoolDiv">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="school"
                                                    id="school" placeholder="Instituição de ensino">
                                            </div>
                                        </div>


                                          <!-- Form Group -->
                                        <div class="col-12 col-lg-6" id="professionDiv">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="profession"
                                                    id="profession" placeholder="Profissão">
                                            </div>
                                        </div>

                  

                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="residence"
                                                    id="residence" placeholder="Residência">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="contact"
                                                    id="contact" placeholder="Contacto">
                                            </div>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email"
                                                    placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="password"
                                                    id="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <!-- Form Group -->

                                        <!-- Button -->

                                    </div>
                                </div>
                            </form>


                            <div class="col-12">

                            </div>
                        </div>
                        <div class="row d-flex justify-content-center " style="margin: 2px;">
                            <button type="submit" onclick="addButton()" class="btn btn-warning btn-lg btn-block"
                                style="background:#f8871f;color:white">Entrar<i
                                    class="zmdi zmdi-long-arrow-right"></i></button>
                            <p class="text-info">Já tens uma conta?</p>

                            <button id="btn" name="btn" onClick="location.href='login.html'"
                                class="btn btn-lg btn-block" style="background:#414c52;color:white">Login</button>
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
    <!-- <script src="js/popper.min.js"></script> -->
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <!-- <script src="js/confer.bundle.js"></script> -->
    <!-- Active -->
    <!-- <script src="js/default-assets/active.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>

    <script>

    function changeUiByCategory(category) {
        switch(category) {
            case 0:

            break;
            case 1:
                studentForm();
            break;
            case 2:
                dadForm();
            break;
            case 3:
            break;
        }

    }
    //get form divs
    var professionDiv = document.getElementById('professionDiv');
    var schoolDiv = document.getElementById('schoolDiv');
    var level_of_schoolingDiv = document.getElementById('level_of_schoolingDiv');
    studentForm()

    function studentForm() {
        professionDiv.style.display = "none";
        schoolDiv.style.display = "block";
        level_of_schoolingDiv.style.display = "block";
    }

    function dadForm() {
        professionDiv.style.display = "block";
        schoolDiv.style.display = "none";
        level_of_schoolingDiv.style.display = "none";
    }

    function othersForm() {
        dadForm();
    }

    function addButton() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var contact = document.getElementById('contact').value;
    var genre = document.getElementById('genre').value;
    var date_of_birth = document.getElementById('date_of_birth').value;
    var category = document.getElementById('category').value;
    var residence = document.getElementById('residence').value;
    var school =   document.getElementById('school').value;
    var profession = document.getElementById('profession').value;
    var userId = "";
    var imageUrl = "";

    firebase.auth().createUserWithEmailAndPassword(email, password )
    .then(function(data){
        userId = data.user.uid;
    
        create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence , school);
        
    //Here if you want you can sign in the user
    }).catch(function(error) {
        alert(""+error);
    //Handle error
});

}


function create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence , school) {
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
               residence:residence,
               school:school
    };

    firebase.database().ref().child('users').child(userId).set(data , function(error){
            if (error) {
                alert("Data could not be saved." + error);
                location.href = "intro.php";
            } else {
                location.href = "index.php";
            }
        });

    }
    </script>



</body>

</html>
