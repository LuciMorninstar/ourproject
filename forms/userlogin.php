<?php

session_start();


?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/userlogin.css">
  </head>
  <body>

  <!-- ----------------------------------------------LOGIN FORM-------------------------------    -->
  <div class="userlogin">
    <h3>Welcome Back!</h3>
    <br>
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">

    <label for="email">Email address</label><br>
    <input type="email"  class="login_email" id="email" name = "email" placeholder="name@gmail.com"required autocomplete="email"><br>

    <label for="password" class="secondlabel">Password </label><br>
    <input type="password"  class="login_password" id="password" name = "password" placeholder="password"required autocomplete="current-password"><br>


    <button id ="userlogin_login_button" value ="login" name ="login" type="submit">Login</button>
    <br>

    <p class="or">OR</p>

    <p id="login_as_admin"><a style = "text-decoration:none;" href="../forms/adminlogin.php">Login As Admin</a></p>


    <div class="noaccount">
   <p> Don't have an account? <a href="../forms/register.php" class="refer_to_register" >Register</a>
    </div>

</form>
<!-- 
<div class="close_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
</div> -->


</div>








    <!-- <script src="../js/container.js" defer></script> -->
  </body>
  </html>


  
<?php

include("dbconnect.php");

?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

   $email = $_POST["email"];
   $password = $_POST["password"];
   $login = $_POST["login"];

   $sql = "SELECT email, password
            FROM register
            WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);

          if($email === $row["email"] && $password === $row["password"]){
            $_SESSION["username"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];

           echo "Login successful ";
    
           header("Location: ../php/main.php");
           exit;

          }
          else{
           echo "<script> window.alert('Invalid Email or password'); window.location.href='../forms/userlogin.php' ;</script> ";
           exit;
          }




        
  
        }

      
      

      mysqli_close($conn);

    
    }
          




?>
  
