
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>

<!-- _______________________________CREATE ACCOUNT_   Register_____________________________________________ -->


    
<div class="register">
    <h3>Create an Account</h3>
    <br>
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <div class="oneline">
        <div class="column">
            <label for="first_name" >First Name</label>
            <input type="text" id="first_name" name = "first_name" placeholder="first_name" required autocomplete="first_name">
        </div>

        <div class="column">
            <label for="last_name" >Last Name</label>
            <input type="text" id="last_name" name = "last_name" placeholder="last_name" required autocomplete="last_name">
        </div>
    
    </div>

    <div class="oneline">
        <div class="column">
            <label for="dob" >Date of Birth</label>
            <input type="date" id="dob" placeholder="dob" name = "dob" required autocomplete="dob" style="width:175px;">
        </div>

        <div class="column">
            <label for="address" >Adress</label>
            <input type="text" id="address" placeholder="city" name = "address" required autocomplete="address">
        </div>
    
    </div>

    <div class="choose">
        
        <label>Select your gender</label><br>
        
        <label for="gender">male</label>
        <input type="radio" id="male" value ="male" name="gender">

        <label for="gender">female</label>
        <input type="radio" id="female" value = "female" name="gender"><br>

    </div>
   
    
    <label for="email">Email address</label><br>
    <input type="email" name = "email" id="email" placeholder="name@gmail.com"required autocomplete="email"><br>

    
    <label for="number">number</label><br>
    <input type="text" name = "number" id="number" placeholder="+977"required autocomplete="number"><br>


    <label for="password">Password</label><br>
    <input type="password" name = "password" id="password" placeholder="Password"required autocomplete="password"><br>

    




    <button id="login_button" name = "submit" value = "submit" type="submit">Register</button>
    <br>

    <div class="alreadyaccount">
   <p> Have an account? <a class="refer_to_login" href="../forms/userlogin.php">Login</a></p>
    </div>

</form>
<!-- 
<div class="close_register_btn">
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

   
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // $password_hash = password_hash('$password', PASSWORD_DEFAULT);

    $submit = $_POST["submit"];

    if(isset($submit)){

        $sql = "INSERT INTO register (first_name, last_name, dob, address, gender, email, number, password)
                            VALUES('$first_name','$last_name', '$dob', '$address', '$gender', '$email', '$number', '$password')";

        mysqli_query($conn, $sql); 

        header("Location: ../forms/userlogin.php");



    }
    else{
        echo "Insertion failed";
    }


    



mysqli_close($conn);

}




?>
  