<?php
require '../dbh/dbh.php';

$last = $_POST['times'];
$Project_id = $_POST['pid'];

$sql = "UPDATE projects_budgets SET Status = 'REJECTED' WHERE Project_id = '$Project_id'";
if($Conn->query($sql)==FALSE)
{
    echo "Error".$sql . "<br>" . $Conn->error;
}

for($i = 0 ;$i<$last;$i++)
{
    if(isset($_POST['name'.$i]))
    {

        $id = $_POST['name'.$i];
        $sql = "UPDATE projects_budgets SET Status = 'APPROVED' WHERE Budget_id = $id";
        if($Conn->query($sql)==FALSE)
        {
            echo "Error".$sql . "<br>" . $Conn->error;
        }
    }
}
header('location: ../Support.php');
