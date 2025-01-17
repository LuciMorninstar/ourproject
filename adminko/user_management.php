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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="user_management.css">
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
    <input type="text" id="first_name" placeholder="first_name" required autocomplete="first_name"><br>

    <label for="middle_name" >Middle Name</label><br>
    <input type="text" id="middle_name" placeholder="middle_name" required autocomplete="middle_name"><br>

</div>


<div class="divider">
    <label for="last_name" >Last Name</label><br>
    <input type="text" id="last_name" placeholder="last_name" required autocomplete="last_name"><br>

    <label for="address" >Address</label><br>
    <input type="text" id="address" placeholder="address" required autocomplete="address"><br>

    </div>

    <div class="divider">   

    <label for="phone_number" >Phone Number</label><br>
    <input type="text" id="phone_number" placeholder="phone_number" required autocomplete="phone_number"><br>


    <label for="email">Email address</label><br>
    <input type="email" id="email" placeholder="name@gmail.com"required autocomplete="email"><br>

    </div>


    <div class="divider">

        
    <label for="rendted_hostel" >Rented Hostel</label><br>
    <input type="text"  id="rendted_hostel" placeholder="rented_hostel"  autocomplete="rendted_hostel"><br>


    <label for="number_of_rooms" >Number of Rooms</label><br>
    <input type="text" id="number_of_rooms" placeholder="number_of_rooms"  autocomplete="number_of_rooms"><br>
 

    
      

    </div>

    
    
    <div class="divider">

        
        <label for="booking_date" >Booking Date</label><br>
        <input type="datetime-local" id="booking_date" placeholder="booking_date"  autocomplete="booking_date"><br>

        <label for="arrival_date" >Arrival Date</label><br>
        <input type="datetime-local" id="arrival_date" placeholder="arrival_date"  autocomplete="arrival_date"><br>
    
 



    </div>

    

    
    <div class="divider">


    <label for="departure_date" >Departure Date</label><br>
    <input type="datetime-local" id="departure_date" placeholder="departure_date"  autocomplete="departure_date"><br>

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



    <!-- ______________________________________________________ADD USER DETAILS_ END_________________________________________ --> 

        


</main>





<script src="user_management.js" defer></script>
</body>
</html>