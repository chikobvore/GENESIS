<?php
    require '../dbh/dbh.php';

    if(isset($_POST['title']) && isset($_POST['file_description']))
    {
        $id = $_POST['title'];
        $sql = "SELECT Project_id FROM projects WHERE REF_NUM = '$id'";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if($confirm > 0 )
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $Project_id = $row['Project_id'];
            }
                $descript = $_POST['file_description'];
                $target_dir = "../files/";
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            //check if  file is already there
                if (file_exists($target_file))
                {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                if ($_FILES["file"]["size"] > 5000000)
                {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;

                }

                if ($uploadOk == 0) 
                {
                    echo "error";
                }
                
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
                {
                    $_SESSION['message'] = "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                    $filename = basename($_FILES['file']['name']);
                    $filepath = "files/".$filename;
                }
                $sql2  = "INSERT INTO Project_Files(Project_id,File_name, File_description,File_path)
                            VALUES($Project_id,'$filename','$descript','$filepath')";

                if($Conn->query($sql2)==TRUE)
                {
                   header('location: Project_Manager.php');
                }
                else{
                    echo "Error1: " . $sql2 . "<br>" . $Conn->error;
                }
            
        }
    }