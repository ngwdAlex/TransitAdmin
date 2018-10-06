<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            echo '<a href="LoginUser.php">Back to previous page</a>';
        }
        ?>
    </body>
</html>
