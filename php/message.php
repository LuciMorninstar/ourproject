
<?php
session_start();

?>




<?php 
include("./container.php");
 ?>

<?php 
include("./sidebar.php"); 

?>




<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

if (isset($_SESSION['those_who_rent'])) {
    $first_name = $_SESSION['those_who_rent'];

    $sql = "SELECT * FROM `user_management` WHERE first_name = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $first_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo '<p  style="width: 1000px; position:absolute; top:200px; left:350px; height: 100px; background-color:var(--button-color); display: flex; align-items: center; justify-content: center; font-size: 18px; border: 1px solid #000;">
                Your booking has been accepted by Admin.
                <br>
                <br>
                *Please Contact the hostel for further details.
                <a class="callus" href="tel:9773434343">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-800v-80h400v80H480Zm0 160v-80h400v80H480Zm0 160v-80h400v80H480ZM758-80q-125 0-247-54.5T289-289Q189-389 134.5-511T80-758q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T347-346q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T630-350l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM201-560l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM201-560Zm358 358Z"/></svg>
                Call

                </a>

              </p>';
              unset($_SESSION['those_who_rent']);
    }

    mysqli_stmt_close($stmt);
}

if (isset($_SESSION['rejected'])) {
 echo '<p  style="width: 1000px; position:absolute; top:200px; left:350px; height: 100px; background-color:var(--button-color); display: flex; align-items: center; justify-content: center; font-size: 18px; border: 1px solid #000;">            Admin has rejected your booking.
          </p>';
    
    // Optionally unset the session variable to prevent repeated messages on refresh
    unset($_SESSION['rejected']);
}



mysqli_close($conn);
?>
