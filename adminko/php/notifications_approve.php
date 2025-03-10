<?php
include("/xampp2/htdocs/hbs/forms/dbconnect.php");

if (isset($_GET['approveid'], $_GET['approvefirst_name'], $_GET['approvelast_name'], $_GET['approveaddress'], 
          $_GET['approvenumber'], $_GET['approveemail'], $_GET['approverented_hostel'], $_GET['approvenumber_of_rooms'], 
          $_GET['approvebooking_date'], $_GET['approvearrival_date'], $_GET['approveprice'], $_GET['approvestatus'])) {

    $id = $_GET['approveid'];
    $first_name = $_GET['approvefirst_name'];
    $last_name = $_GET['approvelast_name'];
    $address = $_GET['approveaddress'];
    $number = $_GET['approvenumber'];
    $email = $_GET['approveemail'];
    $rented_hostel = $_GET['approverented_hostel'];
    $number_of_rooms = $_GET['approvenumber_of_rooms'];
    $booking_date = $_GET['approvebooking_date'];
    $arrival_date = $_GET['approvearrival_date'];
    $price = $_GET['approveprice'];
    $status = $_GET['approvestatus'];

    $query = "INSERT INTO `user_management` (first_name, last_name, address, number, email, rented_hostel, no_of_rooms, booking_date, arrival_date, price, status) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 'sssssssssss', $first_name, $last_name, $address, $number, $email, $rented_hostel, $number_of_rooms, $booking_date, $arrival_date, $price, $status);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            
            // Redirect to delete script
            header("location: notifications_delete.php?approveid=$id");
            exit;
        } else {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            echo "<script>window.alert('Failed to approve the user booking');</script>";
            header("location: user_management.php");
            exit;
        }
    } else {
        mysqli_close($conn);
        echo "<script>window.alert('Failed to add to database');</script>";
        header("location: user_management.php");
        exit;
    }
}
?>
