<?php
    $conn = new mysqli('localhost', 'root', '', 'ajaxcrud');
    $query = "SELECT * FROM registrations";
    $result = $conn->query($query);
    $output = "";

    if(mysqli_num_rows($result) > 0){
        echo "<table border='1px' width='800px' align='center'>";
        echo "<tr>";
            echo "<td>Sr No</td>";
            echo "<td>Name</td>";
            echo "<td>Email</td>";
            echo "<td>Mobile</td>";
            echo "<td>City</td>";
            echo "<td>Action</td>";
        echo "<tr>";
        while($data = $result->fetch_object()){
            echo "<tr>";
                echo "<td>{$data->id}</td>";
                echo "<td>{$data->name}</td>";
                echo "<td>{$data->email}</td>";
                echo "<td>{$data->mobile}</td>";
                echo "<td>{$data->city}</td>";
                echo "<td>
                        <button class='edit-btn'>Edit</button>
                        <button class='delete-btn' data-id='{$data->id}'>Delete</button>
                     </td>";
            echo "<tr>";
        }
        echo "</table>";
    }else{
        echo "<h3 align='center'>No record found</h3>";
    }
?>