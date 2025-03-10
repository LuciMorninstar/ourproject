
<?php
session_start();

if (isset($_SESSION['first_name'])) {
  echo $_SESSION['first_name'];
} else {
  echo "User not logged in or session not set.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/rent.css">
</head>
<body>

<!-- _______________________________CREATE ACCOUNT_   Register_____________________________________________ -->

<div class="rent">
  <h3> Booking Confirmation</h3>
  <br>
  
<form action="" method="POST">

  <div class="oneline">
      <div class="column">
          <label for="first_name" >First Name</label>
          <input type="text" id="first_name" name = "first_name" placeholder="first_name" value ="<?php echo $_SESSION["first_name"];   ?>" required autocomplete="first_name">
      </div>

      <div class="column">
          <label for="last_name" >Last Name</label>
          <input type="text" id="last_name" name = "last_name" placeholder="last_name" value ="<?php echo $_SESSION["last_name"];   ?>" required autocomplete="last_name">
      </div> 
  
  </div>

  
  <div class="oneline">
    <div class="column">
        <label for="email" >Email</label>
        <input type="text" id="email" name = "email" placeholder="email" value ="<?php echo $_SESSION["username"];   ?>" required autocomplete="email">
    </div>

    <div class="column">
        <label for="number" >Number</label>
        <input type="text" id="number" name = "number" placeholder="number" value ="<?php echo $_SESSION["number"];   ?>" required autocomplete="number">
    </div>

</div>


    <div class="oneline">
        <div class="column">
            <label for="hostel_name" >Hostel Name</label>
            <input type="text" id="hostel_name" placeholder="hostel_name" name = "hostel_name" required autocomplete="hostel_name">
        </div>

        <div class="column">
            <label for="address" >Hostel address</label>
            <input type="text" id="address" placeholder="city" name = "address" required autocomplete="address">
        </div>

    </div>

    
    <div class="oneline">
        <div class="column">
            <label for = "beds"> Number of beds</label>
            <select class = "beds" name="beds" style = "width:175px; border:none; outline:none; text-align:center; padding-left:20px;">
                <option name ="beds" value="1">1 Bed</option>
                <option name ="beds" value="2">2 Beds</option>
            </select>
            
      
        </div>

        <div class="column">
            <label class = "bookingdate" for="booking_date" >Booking Date</label>
            <input type="datetime-local" id="booking_date" placeholder="booking_date" name = "booking_date" required autocomplete="booking_date">
        </div>

    </div>



  <div class="oneline">

    
    <div class="column">
        <label class = "labelforarrivaldate" for="arrival_date" >Arrival Date</label>
        <input type="datetime-local" id="arrival_date" placeholder="arrival_date" name = "arrival_date" required autocomplete="arrival_date">
    </div>

    <!-- <div class="column">
        <label class = "labelforbookingdate" for="departure_date" >Departure Date</label>
        <input type="datetime-local" id="departure_date" placeholder="departure_date" name = "departure_date" required autocomplete="booking_date">
    </div> -->


  </div>

  <label for = "price">Price</label>
  <input type = "text" name = "price" id = "price"  placeholder = "NRs." required autocomplete="price"><br>





  <button id="pay" name = "pay" value = "pay" type="submit">Rent</button>
  <br>



</form>


</div>




  






<script>
    document.addEventListener("DOMContentLoaded", function () {
        let today = new Date().toISOString().split("T")[0];
        let dateInput = document.getElementById("arrival_date");
        dateInput.setAttribute("min", today);

        // Prevent users from manually entering past dates
        dateInput.addEventListener("input", function () {
            if (this.value < today) {
                this.value = today;
            }
        });
    });
</script>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // Adjust for local time
    const formattedDateTime = now.toISOString().slice(0, 16);
    document.getElementById("booking_date").value = formattedDateTime;
  });
</script>

  <!-- <script src="../js/container.js" defer></script> -->
   <script src="../js/rent.js"defer>
    
   </script>
</body>
</html>


<!-- _____________________RENT CLICKED_ SEND DATA TO DATABSE FOR NOTIFICATION___________________ -->
<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

if (isset($_POST["pay"])) {
    if (isset($_SESSION['first_name'])) {

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $hostel_name = $_POST["hostel_name"];
        $address = $_POST["address"];
        $beds = $_POST["beds"];
        $booking_date = $_POST["booking_date"];
        $arrival_date = $_POST["arrival_date"];
        $price = $_POST["price"];
        

    
        $sql = "INSERT INTO booking (first_name, last_name, email, number, hostel_name, hostel_address, beds, booking_date, arrival_date, price) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
       
            mysqli_stmt_bind_param($stmt, "ssssssssss", $first_name, $last_name, $email, $number, $hostel_name, $address, $beds, $booking_date, $arrival_date, $price);

           
            if (mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Booking successful!. You will get notified when admin approves your booking."); window.location.href = "../php/main.php";</script>';
                $_SESSION['those_who_rent'] = $first_name;
            } else {
                echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
            }
        
            mysqli_stmt_close($stmt);
        } else {
            echo '<script>alert("Error: Could not prepare the statement.");</script>';
        }
    } else {
      
        echo '<script> alert("You must sign in to continue"); window.location.href = "../forms/userlogin.php"; </script>';
    }


    mysqli_close($conn);
}
?>

