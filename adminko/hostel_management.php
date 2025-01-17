<?php
include("admin_container.php");

?>

<?php
include("admin_sidebar.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hostel_management.css">
</head>
<body>
    
<main>

    <div class="Topic">   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M80-120v-720h400v160h400v560H80Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h320v-400H480v80h80v80h-80v80h80v80h-80v80Zm160-240v-80h80v80h-80Zm0 160v-80h80v80h-80Z"/></svg>
        Hostel Management
    </div>


    
<button type="submit" class="add_hostel">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
    Add Hostel Details
    <svg class="this_svg" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-200 240-440l56-56 184 183 184-183 56 56-240 240Zm0-240L240-680l56-56 184 183 184-183 56 56-240 240Z"/></svg>
    
</button>



<div class="add_hostel_details">
    <h3>Add Hostel Details</h3>
    <br>
    
    
<form action="hostel_management.php" method="POST">


<div class="divider">
    <label for="hostel_name" >Hostel Name</label><br>
    <input type="text" id="hostel_name" placeholder="hostel_name" required autocomplete="hostel_name"><br>

    <label for="location" >Location</label><br>
    <input type="text" id="location" placeholder="location" required autocomplete="location"><br>

</div>


<div class="divider">
    <label for="Contact_number" >Contact Number</label><br>
    <input type="text" id="Contact_number" placeholder="Contact_number" required autocomplete="Contact_number"><br>

    <label for="hostel_email">Email address</label><br>
    <input type="email" id="hostel_email" placeholder="name@gmail.com"required autocomplete="hostel_email"><br>

    </div>

    <div class="divider">   

    <label for="Category" >Category</label><br>
    <input type="text" id="Category" placeholder="Category" required autocomplete="Category"><br>


    <label for="numberofrooms">Number of Rooms</label><br>
    <input type="number" id="numberofrooms" placeholder="Rooms"required autocomplete="numberofrooms"><br>

    </div>


    <div class="divider">

   <label for="numberofbathrooms">Number of Bathrooms</label><br>
    <input type="number" id="numberofbathrooms" placeholder=" Bathrooms"required autocomplete="numberofbathrooms"><br>

    <label for="number_of_beds" >Number of Beds </label><br>
    <input type="number" id="number_of_beds" placeholder="Beds"  autocomplete="number_of_beds"><br>
 

    
      

    </div>

    
    
    <div class="divider">

        
  
        <label for="hostel_image" >Hostel Image</label><br>
        <input type="file" id="hostel_image" name = "hostel_image"  accept="image/*" placeholder="hostel_image"  autocomplete="hostel_image"><br>

        <label for="gallery_image" >Gallery Image</label><br>
        <input type="file" id="gallery_image"  name = "gallery_image[]"  accept="image/*" placeholder="gallery_image"  autocomplete="gallery_image" multiple><br>

    </div>


    
    <div class="divider">

        <label for="map_url" >Map URL</label><br>
        <input type="text" id="map_url" placeholder="map_url"  autocomplete="map_url"><br>

        <label for="price"> Total Price</label><br>
        <input type="text" id="price" placeholder="price" required autocomplete="price"><br>




    </div>


    <button id="login_button" type="submit">Add Credentials</button>
    <br>



</form>

<div class="close_register_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
</div>

</div>
































</main>




<script src="hostel_management.js" defer></script>
</body>
</html>