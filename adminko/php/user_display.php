


<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER_DISPLAY</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../css/user_management.css">

</head>
<body>
    

<table class="table">
  <thead>
    <tr>
      <th>id </th>
      <th>first_name</th>
      <th>middle_name</th>
      <th>last_name</th>
      <th>address</th>
      <th>number</th>
      <th>email</th>
      <th>rented_hostel</th>
      <th>no_of_rooms</th>
      <th>booking_date</th>
      <th>arrival_date</th>
      <th>departure_date</th>
      <th>price</th>
      <th>Operations</th>
      
      
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "SELECT * FROM user_management";

$result = mysqli_query($conn, $sql);

if($result){

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
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

        echo ' <tr>
      <td>'.$id.'</td>
    
      <td>'.$first_name.'</td>
      <td>'.$middle_name.'</td>
      <td>'.$last_name.'</td>
      <td>'.$address.'</td>
      <td>'.$number.'</td>
      <td>'.$email.'</td>
      <td>'.$rented_hostel.'</td>
      <td>'.$number_of_rooms.'</td>
      <td>'.$booking_date.'</td>
      <td>'.$arrival_date.'</td>
      <td>'.$departure_date.'</td>
      <td>'.$price.'</td>
        <td>

            <a class="btn btn-primary mb-2 text-light" href="user_update.php?updateid='.$id.'">Update</a>
           <a class="btn btn-danger mb-2 text-light" href="user_delete.php?deleteid='.$id.'">Delete</a>

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
    
</body>
</html>

