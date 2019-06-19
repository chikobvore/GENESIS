<?php

require '../dbh/dbh.php';
if (isset($_POST['id']))
{
    $Project_id = $_POST['id'];
    $i = 0;
    while (!empty($_POST['name'.$i]))
    {

        $Field = $_POST['field'.$i];
        $data = $_POST['name'.$i];

        $sql = "INSERT INTO Beneficiary_Data(Project_id,Field,Data)VALUES ($Project_id,'$Field','$data')";
        if ($Conn->query($sql) == FALSE)
        {
            echo "Error: " . $sql . "<br>" . $Conn->error;
        }
        $i = $i + 1;
    }
    header('location: ../Field.php');
}