<?php

session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/adminlogin.css">
</head>
<body>


<!-- ______________________________LOGIN AS ADMIN___________________________ -->
<div class="adminlogin">
    <h3>Login As Admin</h3>
    <br>
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">

    <label for="email">Email address</label><br>
    <input type="email"  class="login_email" name = "email" id="email" placeholder="name@gmail.com"required autocomplete="email"><br>

    <label for="password" class="secondlabel">Password </label><br>
    <input type="password"  class="login_password" name = "password" id="password" placeholder="password"required autocomplete="current-password"><br>

    <!-- <div class="forgot-password">
        <a href="#">Forgot password?</a>
    </div> -->

    <button id ="Admin_login_button" name = "adminlogin" type="submit">Login</button>
    <br>


</form>
<!-- 
<div class="close_admin_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
</div> -->


</div>


    


<script src="../js/container.js" defer></script>
</body>
</html>


<?php
include("dbconnect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(isset($_POST["adminlogin"])){

        $sql = "SELECT email, password 
                FROM adminlogin where email = '$email'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);

            if($email === $row["email"] && 
               password_verify($password, $row["password"])){

                $_SESSION["admin_email"] = $email;
                $_SESSION["admin_password"] = $password;

                echo "<script> window.alert('Admin login successful'); </script>";
                header("Location: ../adminko/php/admin_dashboard.php");
            

               }
               else{
                echo  "<script> window.alert('Invalid email or password'); </script>";
               }

        }




    }
}




?>