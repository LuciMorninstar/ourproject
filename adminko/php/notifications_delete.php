
<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

if(isset($_GET['approveid'])){
    $id = $_GET['approveid'];

    $sql = "DELETE FROM `booking` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo 'deleted successfuly';
        header("location: notifications.php");
        // echo '<script>window.alert("Successfully Rejected");</script>';

        $_SESSION['reject_message'] = "Your booking has been rejected.";
    }
    else{
        echo '<script>window.alert("ERROR"); </script>';
    }

}





?>
