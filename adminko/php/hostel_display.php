


<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTEL_DISPLAY</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../css/hostel_management.css">

</head>
<body>
    

<table class="table">
  <thead>
    <tr>
        <th> id </th>
        <th> hostel_name </th>
        <th> location</th>
        <th> Number </th>
        <th> email </th>
        <th> category </th>
        <th> rooms </th>
        <th> bathrooms </th>
        <th> beds </th>
        <th> hostel_image </th>
        <th> gallery_image </th>
        <th> map_url </th>
        <th> price </th>
        <th> Operations </th>
      
      
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "SELECT * FROM hostel_management";

$result = mysqli_query($conn, $sql);

if($result){

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $hostel_name = $row['hostel_name'];
        $location = $row['location'];
        $number = $row['number']; 
        $email = $row['email'];
        $category = $row['category'];
        $rooms = $row['rooms'];
        $bathrooms = $row['bathrooms'];
        $beds = $row['beds'];
        $hostel_image = $row['image'];
        $galley_image = $row['gallery'];
        $map_url = $row['map_url'];
        $price = $row['price'];

        echo ' <tr>
      <td>'.$id.'</td>
    
      <td>'.$hostel_name.'</td>
      <td>'.$location.'</td>
       <td>'.$number.'</td>
      <td>'.$email.'</td>
      <td>'.$category.'</td>
      <td>'.$rooms.'</td>
      <td>'.$bathrooms.'</td>
      <td>'.$beds.'</td>
      <td>'.$hostel_image.'</td>
      <td>'.$galley_image.'</td>
      <td>'.$map_url.'</td>
      <td>'.$price.'</td>
        <td>

            <a class="btn btn-primary mb-2 text-light" href="hostel_update.php?updateid='.$id.'">Update</a>
           <a class="btn btn-danger mb-2 text-light" href="hostel_delete.php?deleteid='.$id.'">Delete</a>

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

