<?php


require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/google-service-account.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$auth = $firebase->getAuth();

?>
<html>
    

    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <p>
        <form method="post" action="LoginUser.php">
            <p><label for="name">Username:</label>
                <input type="text" name="name" id="name" size="15" /></p>
            <p><label for="password">Password:</label>
                <input type="password" name="password" id="password" size="15" /></p>
            <button type="submit" name="login">Login</button>
        </form>
        <?php
        $username = trim($_POST['name']);
        $pass = trim($_POST['password']);
        
        try{
        
        
        }catch(Exception $ex){
            echo "<p>Unauthorized User</p>";
            echo '<a href="LoginAdmin.php">Back</a>';
        }
        ?>
    </body>
</html>
