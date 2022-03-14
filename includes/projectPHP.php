<?php
$server_name = "localhost";
$user_name = "edenaa_project";
$password = "12345678";
$database = "edenaa_newProject";

$conn = new mysqli($server_name, $user_name, $password, $database);
if ($conn->connect_error) {
    die("Error connecting: " . $conn->connect_error);
}



    $curr_weight = $_POST["weight"];
    $curr_fat = $_POST["fatP"];
    $calories_c = $_POST["calories"];

    if (isset($_POST['aerobic'])) {
        $x = 1;
    }
    else{
        $x=0;
    }

    if (isset($_POST['strength'])) {
        $y = 1;
    }
    else{
        $y = 0;
    }

    if (isset($_POST['stretching'])) {
        $z = 1;
    }
    else{
        $z = 0;
    }


$sql = " UPDATE customers SET  curr_weight = '".$curr_weight."',curr_fat = '".$curr_fat."', calories_c = calories_c + ".$calories_c.",
stretching_c = stretching_c + ".$z.", aerobic_c = aerobic_c + ".$x." , strength_c = strength_c + ".$y." WHERE id = '333333333'";
$res = $conn->query($sql);


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully. <a  href='../index.html' >press here</a> to return to Home Page";
      } else {
        echo "Error updating record: " . $conn->error;
      }

   

    ?>
