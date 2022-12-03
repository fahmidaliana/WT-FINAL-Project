<?php

include('../model/DB.php');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $sql = "DELETE FROM `customer` WHERE ID = $id";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo '<script> alert("Data deleted")</script>';
        header("location:../view/order.php");
    }
    else
    {
        echo '<script> alert("Data deleted")</script>';
        
    }

}

?>