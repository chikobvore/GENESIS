<?php
require '../dbh/dbh.php';
session_start();


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['staff_id']) && isset($_POST['Department']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['Gender']) && isset($_POST['role']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $staff_id = $_POST['staff_id'];
    $Department = $_POST['Department'];
    $Email = $_POST['email'];
    $phone  = $_POST['phone'];
    $address = $_POST['address'];
    $Gender = $_POST['Gender'];
    $role = $_POST['role'];

    $sql = "INSERT INTO Employees(Name,Surname,Staff_id,Department,Email,Phone,Physical_Address,Gender,Position)
            VALUES ('$name','$surname','$staff_id','$Department','$Email','$phone','$address','$Gender','$role')";
    
    if($Conn->query($sql) == TRUE)
    {
        $_SESSION['message'] = "You have successfully added ".$name." ".$surname." to employees";
        header('location: ../Admin.php');
    }else{
        echo "Error". $sql . "<br>" . $Conn->error; 
    }

    
}