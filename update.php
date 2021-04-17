<?php
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $conn = new mysqli('localhost', 'root', '', 'ajaxcrud');

    $query = "UPDATE registrations SET name = '$name', email = '$email', mobile = '$mobile', city = '$city' WHERE id = '$userId'";

    if($conn->query($query)){
        echo "1";
    }else{
        echo "0";
    }
?>