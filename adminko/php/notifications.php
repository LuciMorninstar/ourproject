
<?php
session_start();
?>


<?php
include("./admin_container.php");

?>

<?php
include("./admin_sidebar.php");

?>



<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTEL_DISPLAY</title>
    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"> -->
    <link rel="stylesheet" href="../css/notifications.css"> 

</head>
<body>
<main>

<div class="Topic">  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>
    Bookings
</div>


<table class="table">
  <thead>
    <tr>
      <th>id </th>
      <th>Fname</th>
      <th>Lname</th>
      <th>address</th>
      <th>number</th>
      <th>email</th>
      <th>rented_hostel</th>
      <th>No_Of_Beds</th>
      <th>booking_date</th>
      <th>arrival_date</th>
      <!-- <th>departure_date</th> -->
      <th>price</th>
      <th>Actions</th>
      
      
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "SELECT * FROM booking";

$result = mysqli_query($conn, $sql);

if($result){

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $first_name = $row['first_name'];
        // $middle_name = $row['middle_name'];
        $last_name = $row['last_name'];
        $address = $row['hostel_address'];
        $number = $row['number'];
        $email = $row['email'];
        $rented_hostel = $row['hostel_name'];
        $number_of_rooms = $row['beds'];
        $booking_date = $row['booking_date'];
        $arrival_date = $row['arrival_date'];
        // $departure_date = $row['departure_date'];
        $price = $row['price'];

        echo ' <tr>
      <td>'.$id.'</td>
    
      <td>'.$first_name.'</td>
     
      <td>'.$last_name.'</td>
      <td>'.$address.'</td>
      <td>'.$number.'</td>
      <td>'.$email.'</td>
      <td>'.$rented_hostel.'</td>
      <td>'.$number_of_rooms.'</td>
      <td>'.$booking_date.'</td>
      <td>'.$arrival_date.'</td>
      
      <td>'.$price.'</td>
        <td>

            <a id="approve" class="btn btn-primary mb-2 text-light" href="notifications_approve.php?approveid='.$id.'&approvefirst_name='.$first_name.'&approvelast_name='.$last_name.'&approveaddress='.$address.'&approvenumber='.$number.'&approveemail='.$email.'&approverented_hostel='.$rented_hostel.'&approvenumber_of_rooms='.$number_of_rooms.'&approvebooking_date='.$booking_date.'&approvearrival_date='.$arrival_date.'&approveprice='.$price.'&approvestatus=success">Approve</a>


            
           <a id ="reject" class="btn btn-danger mb-2 text-light" href="notifications_reject.php?rejectid='.$id.'">Reject</a>

        </td>
    </tr>';
    }
}
else{
    echo "<script>alert( 'NO records found');</script>";
}


  ?>
   
 
  </tbody>
</table>
    </main>

    <script src="../js/notifications.js" defer></script>
</body>
</html>




