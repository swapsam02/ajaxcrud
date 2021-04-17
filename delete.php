<?php
    $uid = $_POST['id'];

    $conn = new mysqli('localhost', 'root', '', 'ajaxcrud');
    $query = "DELETE FROM registrations WHERE id = '$uid'";

    if($conn->query($query)){
        echo "1";
    }else{
        echo "0";
    }
?>