<?php
session_start();


require '../dbh/dbh.php';
if (isset($_POST['id']))
{
    $Project_id = $_POST['id'];
    $staff_id = $_SESSION['Staff_id'];
    $i = 0;
    $sql  = "SELECT id FROM beneficiary_data";
    $result = mysqli_query($Conn,$sql);
    $confirm = mysqli_num_rows($result);
    if($confirm > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $token = $row['id'];
            echo $token;
        }
    }else{
        $token = 1;
        echo "Error: " . $sql . "<br>" . $Conn->error;
    }
    while (!empty($_POST['name'.$i]))
    {

        $Field = $_POST['field'.$i];
        $data = $_POST['name'.$i];

        $sql = "INSERT INTO Beneficiary_Data(Project_id,Field,Data,Staff_id,Token)VALUES ($Project_id,'$Field','$data','$staff_id',$token)";
        if ($Conn->query($sql) == FALSE)
        {
            echo "Error: " . $sql . "<br>" . $Conn->error;
        }
        $i = $i + 1;
    }
   header('location: ../Field.php');
}