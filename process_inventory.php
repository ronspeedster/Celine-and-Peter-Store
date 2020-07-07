<?php
    include('dbh.php');
    $date = date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');

    if(isset($_POST['save'])){
        $item_id = mysqli_real_escape_string($mysqli, $_POST['item_id']);
        $item_code = mysqli_real_escape_string($mysqli, $_POST['item_code']);
        $item_name = mysqli_real_escape_string($mysqli, $_POST['item_name']);
        $qty = mysqli_real_escape_string($mysqli, $_POST['qty']);
        $price = mysqli_real_escape_string($mysqli, $_POST['price']);
        $total_cost = mysqli_real_escape_string($mysqli, $_POST['total_cost']);
        $description = mysqli_real_escape_string($mysqli, $_POST['description']);

        $mysqli->query("INSERT INTO inventory (id, item_code, item_name, qty, item_description, item_price) VALUES('$item_id','$item_code','$item_name', '$qty', '$description', '$price')") or die($mysqli->error());
        $mysqli->query("INSERT INTO inventory_cost (item_id, total_cost, date_added) VALUES('$item_id', '$total_cost', '$date')") or die($mysqli->error());
        $_SESSION['message'] = "An item has been added!";
        $_SESSION['msg_type'] = "success";
        header('location: inventory.php');
    }

    if(isset($_GET['delete'])){
        $item_id = $_GET['delete'];
        $mysqli->query(" DELETE FROM inventory WHERE id = '$item_id' ") or die($mysqli->error());
        $_SESSION['message'] = "Item has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header('location: inventory.php');
    }
?>