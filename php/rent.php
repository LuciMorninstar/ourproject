
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
  <h3>Payment Gateaway</h3>
  <br>
  
<form action="#" method="POST">

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
        <label for="email" >Email</label>
        <input type="text" id="email" name = "email" placeholder="email" required autocomplete="email">
    </div>

    <div class="column">
        <label for="number" >Number</label>
        <input type="text" id="number" name = "number" placeholder="number" required autocomplete="number">
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
                <option value="1">1 Bed</option>
                <option value="2">2 Beds</option>
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

    <div class="column">
        <label class = "labelforbookingdate" for="departure_date" >Departure Date</label>
        <input type="datetime-local" id="departure_date" placeholder="departure_date" name = "departure_date" required autocomplete="booking_date">
    </div>


  </div>

  <label for = "price">Price</label>
  <input type = "text" name = "price" id = "price"  placeholder = "NRs." required autocomplete="price">




  <button id="pay" name = "pay" value = "pay" type="submit">Pay Via Khalti</button>
  <br>



</form>


</div>


  








<script>
  document.addEventListener("DOMContentLoaded", function () {
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // Adjust for local time
    const formattedDateTime = now.toISOString().slice(0, 16);
    document.getElementById("booking_date").value = formattedDateTime;
  });
</script>

  <!-- <script src="../js/container.js" defer></script> -->
</body>
</html>
