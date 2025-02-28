
<?php

include("/xampp2/htdocs/hbs/forms/dbconnect.php");

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `hostel_management` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo 'deleted successfuly';
        header("location: hostel_management.php");
        // echo '<script>window.alert("Successfully Deleted");</script>';
    }
    else{
        echo '<script>window.alert("ERROR"); </script>';
    }

}

?>
