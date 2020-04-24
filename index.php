<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.muicss.com/mui-0.10.2/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.2/js/mui.min.js"></script>
    <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script>
    <!--Script for authentication over firebase-->
    <script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyA_pIcQkSru5o6UCuht2-Zr8fZ-qp025X0",
    authDomain: "virtualsquad-642f4.firebaseapp.com",
    databaseURL: "https://virtualsquad-642f4.firebaseio.com",
    projectId: "virtualsquad-642f4",
    storageBucket: "virtualsquad-642f4.appspot.com",
    messagingSenderId: "352517931532",
    appId: "1:352517931532:web:b93a74c80ab9f7b719a429",
    measurementId: "G-K36RZTQVVF"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script>
  var email="someone@example.com";
  var password="password";
  
  //Create User with Email and Password
  firebase.auth().createUserWithEmailAndPassword(email, password).then(function() {
  // User deleted.
  console.log('User Created!');
}).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
  });
// function to check user is signed in or not
  firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    var displayName = user.displayName;
    var email = user.email;
    var emailVerified = user.emailVerified;
    var photoURL = user.photoURL;
    var isAnonymous = user.isAnonymous;
    var uid = user.uid;
    var providerData = user.providerData;

    console.log("user id for logged in user is :"+uid);
    // ...
  } else {
    // User is signed out.
    // ...
  }
});
</script>


  </head>
  <title>Work Management</title>
  <body>

  </body>
</html>