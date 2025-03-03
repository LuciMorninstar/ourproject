<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/hostel_update.css">
</head>
<body>

<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

$id = $_GET['updateid'];
// echo $id;

$query = "SELECT * FROM hostel_management WHERE id=$id";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

// echo $row['hostel_name'];


?>

<main>

<div class="add_hostel_details">
    <h3>Add Hostel Details</h3>
    <br>
    
    
<form action="" method="POST">


<div class="divider">
    <label for="hostel_name" >Hostel Name</label><br>
    <input type="text" id="hostel_name" name = "hostel_name"  value = "<?php  echo $row['hostel_name']; ?>" placeholder="hostel_name" required autocomplete="hostel_name"><br>

    <label for="location" >Location</label><br>
    <input type="text" id="location" name = "location"  value = "<?php  echo $row['location']; ?>" placeholder="location" required autocomplete="location"><br>

</div>


<div class="divider">
    <label for="Contact_number" >Contact Number</label><br>
    <input type="text" id="Contact_number"  name = "number"   value = "<?php  echo $row['number']; ?>" placeholder="Contact_number" required autocomplete="Contact_number"><br>

    <label for="hostel_email">Email address</label><br>
    <input type="email" id="hostel_email"  name = "email"  value = "<?php  echo $row['email']; ?>" placeholder="name@gmail.com"required autocomplete="hostel_email"><br>

    </div>

    <div class="divider">   

    <label for="Category" >Category</label><br>
    <input type="text" id="Category" name = "category"  value = "<?php  echo $row['category']; ?>"  placeholder="Category" required autocomplete="Category"><br>


    <label for="numberofrooms">Number of Rooms</label><br>
    <input type="number" id="numberofrooms" name = "rooms"  value = "<?php  echo $row['rooms']; ?>" placeholder="Rooms"required autocomplete="numberofrooms"><br>

    </div>


    <div class="divider">

   <label for="numberofbathrooms">Number of Bathrooms</label><br>
    <input type="number" id="numberofbathrooms" name = "bathrooms"  value = "<?php  echo $row['bathrooms']; ?>" placeholder=" Bathrooms"required autocomplete="numberofbathrooms"><br>

    <label for="number_of_beds" >Number of Beds </label><br>
    <input type="number" id="number_of_beds" name = "beds"  value = "<?php  echo $row['beds']; ?>"  placeholder="Beds"  autocomplete="number_of_beds"><br>
 

    
      

    </div>

    
    
    <div class="divider">

        
  
        <label for="hostel_image" >Hostel Image</label><br>
        <input type="text" id="hostel_image" name = "hostel_image"  value = "<?php  echo $row['image']; ?>"  placeholder="hostel_image"  autocomplete="hostel_image"><br>

        <label for="gallery_image" >Gallery Image</label><br>
        <input type="text" id="gallery_image"  name = "gallery_image"  value = "<?php  echo $row['gallery']; ?>"   placeholder="gallery_image"  autocomplete="gallery_image" ><br>

    </div>


    
    <div class="divider">

        <label for="map_url" >Map URL</label><br>
        <input type="text" id="map_url" name = "map_url"  value = "<?php  echo $row['map_url']; ?>" placeholder="map_url"  autocomplete="map_url"><br>

        <label for="price"> Total Price</label><br>
        <input type="text" id="price" name = "price"   value = "<?php  echo $row['price']; ?>"  placeholder="price" required autocomplete="price"><br>




    </div>


    <button id="login_button" name ="update" value ="update" type="submit">Update</button>
    <br>



    
<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

?>

<?php


   
    if(isset($_POST['update'])){

        
    $hostel_name = $_POST["hostel_name"];
    $location = $_POST["location"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $category = $_POST["category"];
    $rooms = $_POST["rooms"];
    $bathrooms = $_POST["bathrooms"];
    $beds = $_POST["beds"];
    $hostel_image = $_POST["hostel_image"];
    $gallery_image = $_POST["gallery_image"];
    $map_url = $_POST["map_url"];
    $price = $_POST["price"];

        $query = "UPDATE hostel_management SET  hostel_name = '$hostel_name', location = '$location', number = $number, email = '$email', category = '$category', rooms = $rooms, bathrooms = $bathrooms,
                beds = $beds, image = '$hostel_image', gallery = '$gallery_image', map_url = '$map_url', price = $price WHERE id=$id  ";

        $result =  mysqli_query($conn, $query);

        if($result){
            echo '<script>window.alert("UPDATE SUCCESSFUL");</script>';
            header("location: hostel_management.php");
        }
        else{
            echo '<script>window.alert("UPDATE NOT SUCCESSFUL");</script>';
            // header("location: hostel_management.php");
        }







    }




?>




</form>



</div>




</main>








</body>
</html>













    
</body>
</html>