(function (){
    // Initialize Firebase
      const config = {
        apiKey: "AIzaSyD4yBwQEfvjd-S9shlCvZap5E7SjQOQ1NE",
        authDomain: "transitports-ee351.firebaseapp.com",
        databaseURL: "https://transitports-ee351.firebaseio.com",
        projectId: "transitports-ee351",
        storageBucket: "transitports-ee351.appspot.com",
        messagingSenderId: "1015664105253"
      };
      firebase.initializeApp(config);
      
      const txtEmail = document.getElementById('inputEmail');
      const txtPassword = document.getElementById('inputPassword');
      const btnLogin = document.getElementById('btnLogin');
      const btnForgot = document.getElementById('btnForgotPassword');
      
      btnLogin.addEventListener('click', e =>{
         const email = txtEmail.value;
         const pass = txtPassword.value;
         const auth = firebase.auth();
         
         const promise = auth.signInWithEmailAndPassword(email,pass);
         promise.catch(e => console.log(e.message));
      });
}());