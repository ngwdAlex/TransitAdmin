<html>
    
    <head>
<!--        <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase.js"></script>
        <script>
          // Initialize Firebase
          var config = {
            apiKey: "AIzaSyD4yBwQEfvjd-S9shlCvZap5E7SjQOQ1NE",
            authDomain: "transitports-ee351.firebaseapp.com",
            databaseURL: "https://transitports-ee351.firebaseio.com",
            projectId: "transitports-ee351",
            storageBucket: "transitports-ee351.appspot.com",
            messagingSenderId: "1015664105253"
          };
          firebase.initializeApp(config);
        </script>-->

        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
            if ((!isset($_POST['name'])) || !isset($_POST['password'])) {
        ?>
            <h1>Log In</h1>
            <p><h3>Please enter your email and password</h3></p>
        <p>
        <form method="post" action="LoginUser.php">
            <p><label for="name">Email:</label>
                <input type="text" name="email" id="email" size="15" /></p>
            <p><label for="password">Password:</label>
                <input type="password" name="password" id="password" size="15" /></p>
            <button type="submit" name="login">Login</button>
        </form>
        <?php
            } else{
                $email = trim($_POST['email']);
                $pass = trim($_POST['password']);
//                echo $email;
//                echo $pass;
//                firebase.auth().signInWithEmailAndPassword($email, $pass);
                try{    
                    echo "<p><h2>Welcome Admin!</h2></p>";
                    echo '<p>';
                    echo '<form action="LandingMainPage.php" method="post">';
                    echo '<button type="submit" name="Confirm" value="Confirm">Confirm</button>';
                    echo '</form></p>';
                }catch(Exception $ex){
                    echo "<p>Unauthorized User</p>";
                    echo '<a href="LoginAdmin.php">Back</a>';
                }
            }
        ?>
    </body>
</html>