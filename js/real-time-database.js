
function loginUser(name , password){
    console.log(name);
}

//add institution
function register_institution(){
    var institution_name = document.getElementById('institution_name').value;
    var location = document.getElementById('location').value;
    var contact  = document.getElementById('contact').value;
    var website  = document.getElementById('website').value;
    var video_link = document.getElementById('video_link').value;
    var institution_description = document.getElementById('institution_description').value;
    var email      = document.getElementById('email').value;
    var password   = document.getElementById('password').value;

    addInstitution(institution_name ,location , contact , website , video_link , institution_description , email , password);
}

function addInstitution(institution_name ,location , contact , website , video_link , institution_description , email , password){

    var data = {
        institution_name : institution_name ,
        location : location ,
        contact  : contact,
        website  : website,
        video_link : video_link,
        institution_description : institution_description ,
        email:email,
        password: password
    }

    
    return firebase.database().ref().child('institution').push(data);
}






// register users
// document.getElementById("form").addEventListener("submit", function(){

//     //
//     //
//     // 
//   //   writeUserData(userId, name, email, password,imageUrl , contact,genre , date_of_birth, category,residence );

//   task = {
//        userId:"userId",
//        name:"name", 
//        email:"email", 
//        password:"password",
//        imageUrl:"imageUrl", 
//        contact:"contact",
//        genre:"genre" , 
//        date_of_birth:"date_of_birth", 
//        category:"category",
//        residence:"residence"
//   }

//   return firebase.database().ref().child('users').push(task);
//   console.log(name);

// //  let db = firebase.database().ref('users/' + userId);
// //  db.set(task);


  
//   });


/*
firebase.database().ref('users').on('value', function(snapshot){
    //userList.innerHTML = '';
    snapshot.forEach(function (item) {
        var li = document.createElement('li');
        li.appendChild(document.createTextNode(item.val().nome + ': ' + item.val().idade));
        userList.appendChild(li);
    });
});

*/



/*

function remover() {
    const key = "-LrQHurF6khXrBwLsRLj";
    console.log("foi")
   firebase.database().ref('users/' + key).remove();
}
*/