

<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");



?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sql = "SELECT * FROM `user_management` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $first_name = $row['first_name'];
    $middle_name = $row['middle_name'];
    $last_name = $row['last_name'];
    $address = $row['address'];
    $number = $row['number'];
    $email = $row['email'];
    $rented_hostel = $row['rented_hostel'];
    $number_of_rooms = $row['no_of_rooms'];
    $booking_date = $row['booking_date'];
    $arrival_date = $row['arrival_date'];
    $departure_date = $row['departure_date'];
    $price = $row['price'];




    if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

 

   
    if(isset($_POST["login"])){
        
        $first_name = $_POST["first_name"];
        $middle_name = $_POST["middle_name"];
        $last_name = $_POST["last_name"];
        $address = $_POST["address"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $rented_hostel = $_POST["rented_hostel"];
        $number_of_rooms = $_POST["number_of_rooms"];
        $booking_date = $_POST["booking_date"];
        $arrival_date = $_POST["arrival_date"];
        $departure_date = $_POST["departure_date"];
        $price = $_POST["price"];

        $sql = "UPDATE `user_management` set first_name = '$first_name', middle_name = '$middle_name',
                last_name = '$last_name', address = '$address', number = $number, email = '$email', rented_hostel = '$rented_hostel',
                no_of_rooms = $number_of_rooms, booking_date = $booking_date, arrival_date = $arrival_date, 
                departure_date = '$departure_date', price = $price WHERE id = $id ";

         $result = mysqli_query($conn, $sql);
         if($result){
            echo "<script> alert('Updated Successfully');</script>";
         }
         else{
            echo "not updated";
         }





        }

    }

    mysqli_close($conn);
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../css/user_update.css">
</head>
<body>
    


<div class="add_user_details">
    <h3>Add User Details</h3>
    <br>
    

<form action="user_management.php" method="POST">


<div class="divider">
    <label for="first_name" >First Name</label><br>
    <input type="text" id="first_name" name = "first_name" value = <?php echo $first_name?> placeholder="first_name" required autocomplete="first_name"><br>

    <label for="middle_name" >Middle Name</label><br>
    <input type="text" id="middle_name" name = "middle_name" placeholder="middle_name" required autocomplete="middle_name"><br>

</div>


<div class="divider">
    <label for="last_name" >Last Name</label><br>
    <input type="text" id="last_name" name = "last_name" placeholder="last_name" required autocomplete="last_name"><br>

    <label for="address" >Address</label><br>
    <input type="text" id="address" name = "address" placeholder="address" required autocomplete="address"><br>

    </div>

    <div class="divider">   

    <label for="phone_number" >Phone Number</label><br>
    <input type="text" id="phone_number" name = "number" placeholder="phone_number" required autocomplete="phone_number"><br>


    <label for="email">Email address</label><br>
    <input type="email" id="email" name = "email" placeholder="name@gmail.com"required autocomplete="email"><br>

    </div>


    <div class="divider">

        
    <label for="rendted_hostel" >Rented Hostel</label><br>
    <input type="text"  id="rendted_hostel" name = "rented_hostel" placeholder="rented_hostel"  autocomplete="rendted_hostel"><br>


    <label for="number_of_rooms" >Number of Rooms</label><br>
    <input type="text" id="number_of_rooms" name = "number_of_rooms" placeholder="number_of_rooms"  autocomplete="number_of_rooms"><br>
 

    
      

    </div>

    
    
    <div class="divider">

        
        <label for="booking_date" >Booking Date</label><br>
        <input type="datetime-local" id="booking_date" name = "booking_date" placeholder="booking_date"  autocomplete="booking_date"><br>

        <label for="arrival_date" >Arrival Date</label><br>
        <input type="datetime-local" id="arrival_date" name = "arrival_date" placeholder="arrival_date"  autocomplete="arrival_date"><br>
    
 



    </div>

    

    
    <div class="divider">


    <label for="departure_date" >Departure Date</label><br>
    <input type="datetime-local" id="departure_date" name = "departure_date" placeholder="departure_date"  autocomplete="departure_date"><br>

    <label for="price"> Total Price</label><br>
    <input type="text" id="price" placeholder="price" name = "price" required autocomplete="price"><br>




    </div>


    <button id="login_button" name = "login" type="submit">Update</button>
    <br>



</form>


</body>
</html>