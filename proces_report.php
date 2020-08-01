<?php

if(isset($_POST['get_date'])){
    $date = $_POST['date'];

    header("location: report.php?date=".$date);
}

?>