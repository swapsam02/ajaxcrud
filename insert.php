<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $conn = new mysqli('localhost', 'root', '', 'ajaxcrud');
    $query = "INSERT INTO registrations VALUES(NULL, '$name', '$email', '$mobile', '$city')";
    
    if($conn->query($query)){
        echo "1";
    }else{
        echo "0";
    }
?>