<?php

require '../dbh/dbh.php';

if(isset($_POST['title']) && isset($_POST['description']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    $sql = "INSERT INTO Projects(Title,Description,Type) VALUES ('$title','$description','$type')";
    if($Conn->query($sql) === TRUE)
    {
        
        $sql1 = "SELECT Project_id FROM Projects WHERE Title = '$title' AND Description = '$description'";
        $result = mysqli_query($Conn,$sql1);
        $confirm = mysqli_num_rows($result);

        if($confirm > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $Project_id = $row['Project_id'];
                $REF = 100000 + $Project_id;
            }
            $sql3 = "UPDATE Projects  SET REF_NUM = '$REF' WHERE Project_id = '$Project_id'";
            if($Conn->query($sql3) == TRUE)
            {
                header('location: ../Project_Manager.php');
            }
            else{
               echo "Error".$sql3 . "<br>" . $Conn->error;
            }
        }

        //         $descript = $_POST['file_description'];
        //         $target_dir = "../files/";
        //         $target_file = $target_dir . basename($_FILES["file"]["name"]);
        //         $uploadOk = 1;
        //         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //                     //check if  file is already there
        //         if (file_exists($target_file))
        //         {
        //             echo "Sorry, file already exists.";
        //             $uploadOk = 0;
        //         }

        //         if ($_FILES["file"]["size"] > 5000000)
        //         {
        //             echo "Sorry, your file is too large.";
        //             $uploadOk = 0;

        //         }

        //         if ($uploadOk == 0) 
        //         {
        //             echo "error";
        //         }
                
        //         if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
        //         {
        //             $_SESSION['message'] = "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        //             $filename = basename($_FILES['file']['name']);
        //             $filepath = "files/".$filename;
        //         }
        //         $sql2  = "INSERT INTO Project_Files(Project_id,File_name, File_description,File_path)
        //                     VALUES($Project_id,'$filename','$descript','$filepath')";

        //         if($Conn->query($sql2)==TRUE)
        //         {
        //             echo "File uploaded";
        //         }
        //         else{
        //             echo "Error1: " . $sql2 . "<br>" . $Conn->error;
        //         }
            
       // }
    }
}