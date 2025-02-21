<?php
session_start();
?>


<?php
include("./admin_container.php");

?>

<?php
include("./admin_sidebar.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/user_management.css">
</head>
<body>






<main>


        <div class="Topic">   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
            User Management
        </div>

      
        <div class="information">
                
                <li>Total Log_Inned Users 
                    <p class="total_no_of_users">0 </p>
                    
                </li>
            
                <li>Total Paid Users      
                    <p class="total_no_of_paid_users">0 </p>  
                    
                </li>
            

                <li>Total Unapid Users  
                    <p class="total_no_of_unpaid_users">0 </p>
                    
                </li>
            


        </div>



        
<!-- ______________________________________________________ADD USER DETAILS__________________________________________ -->


<button type="submit" class="add_user">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
    Add User Details
    <svg class="this_svg" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-200 240-440l56-56 184 183 184-183 56 56-240 240Zm0-240L240-680l56-56 184 183 184-183 56 56-240 240Z"/></svg>
    
</button>



<div class="add_user_details">
    <h3>Add User Details</h3>
    <br>
    
    
<form action="user_management.php" method="POST">


<div class="divider">
    <label for="first_name" >First Name</label><br>
    <input type="text" id="first_name" name = "first_name" placeholder="first_name" required autocomplete="first_name"><br>

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


    <button id="login_button" name = "login" type="submit">Add Credentials</button>
    <br>



</form>

<div class="close_register_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
</div>

</div>



    <!-- ______________________________________________________ADD USER DETAILS_ END_________________________________________ --> 

        


</main>





<script src="../js/user_management.js" defer></script>
</body>
</html>





<!-- __________________________________________DELETING FROM TABLE_____________________________ -->

<?php

include("/xampp2/htdocs/renew/forms/dbconnect.php");
    
?>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $sql = "DELETE FROM user_management WHERE id = $id";

       if(mysqli_query($conn, $sql)){
        echo "<script>alert('Record deleted successfully'); </script>";
       }
       else {
        echo "<script>alert('Error deleting record');</script>";
       }

        



    }
    mysqli_close($conn);
}



?>




<!-- _____________________________INSERTING INTO TABLE _________________________ -->
<?php

include("/xampp2/htdocs/renew/forms/dbconnect.php");

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
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

   
    if(isset($_POST["login"])){

        $sql = "INSERT INTO user_management (first_name, middle_name, last_name, address, number, email, rented_hostel, no_of_rooms, booking_date, arrival_date, departure_date, price)
                VALUES('$first_name', '$middle_name', '$last_name', '$address', '$number', '$email', '$rented_hostel', '$number_of_rooms', '$booking_date', '$arrival_date', '$departure_date', '$price')";

         mysqli_query($conn, $sql);







    }

    mysqli_close($conn);
}




?>









<!-- __________________________________SHOWING IN THE TABLE (SELECT METHOD_________________) -->

<?php

include("/xampp2/htdocs/renew/forms/dbconnect.php");

?>




<div class = "table">

<?php



  

        $sql = "SELECT * FROM user_management";

        $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){

      echo   "<table class = 'showtable' border='1'>
                <tr>
                    <th> id </th>
                    <th> first_name </th>
                    <th> middle_name </th>
                    <th> last_name </th>
                    <th> address </th>
                    <th> number </th>
                    <th> email </th>
                    <th> rented_hostel </th>
                    <th> no_of_rooms </th>
                    <th> booking_date </th>
                    <th> arrival_date </th>
                    <th> departure_date </th>
                    <th> price </th>
                    <th colspan = '2'> Perform </th>

                </tr> ";
       while( $row = mysqli_fetch_assoc($result)){

        echo  

                " <tr>
                    <td> {$row['id']}</td>
                    <td> {$row['first_name']} </td>
                    <td> {$row['middle_name']} </td>
                    <td> {$row['last_name']} </td>
                    <td> {$row['address']} </td>
                    <td> {$row['number']} </td>
                    <td> {$row['email']} </td>
                    <td> {$row['rented_hostel']} </td>
                    <td> {$row['no_of_rooms']} </td>
                    <td> {$row['booking_date']}</td>
                    <td> {$row['arrival_date']} </td>
                    <td> {$row['departure_date']} </td>
                    <td> {$row['price']} </td>
                    <td colspan = '2'> 
                    <form action = '' method = 'POST'>

                     <input type='hidden' name='id' value='{$row['id']}'>
                    <button type='submit' name='update' class='UPDATE'>UPDATE</button>
                    <button type='submit'  name='delete' class='DELETE'>DELETE</button>

                    </form>
                    </td>

                </tr>";

             
       }
       echo "</table>";
       
    }
    else{
        echo "<script>alert( 'NO records found');</script>";
    }

            
       
    


       

       mysqli_close($conn);

    
?>
</div>



