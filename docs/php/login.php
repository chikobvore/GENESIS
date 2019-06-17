<?php
require '../dbh/dbh.php';
require '../dbh/Bcrypt.php';
 // hash the password => returns hashed password
   // Bcrypt::hashPassword($password);
    
    // check $password against the $hashedPassword => returns true/false
  //  Bcrypt::checkPassword($password, $hashedPassword);

if (isset($_POST['Username']) && isset($_POST['Password']))
{
	$Username = $_POST['Username'];
	$Pass = $_POST['Password'];
	try
	{
		$sql = "SELECT Password,Name,Surname,Position,Department,Staff_id FROM  Employees WHERE Staff_id = '$Username' ";
		$result = mysqli_query($Conn,$sql);
   		$confirm = mysqli_num_rows($result);
   		if ($confirm > 0)
         {
   			 while ($row = mysqli_fetch_assoc($result))
   			 {
   			 	$Password = $row['Password'];
   			 	$Name = $row['Name'];
   			 	$Surname = $row['Surname'];
          $Position = $row['Position'];
          $Department = $row['Department'];
          $Staff_id = $row['Staff_id'];
   			 }
              $verification =Bcrypt::checkPassword($Pass, $Password);
             if ($verification) {
               session_start();

               if ($Department == 'BUSINESS DEVELOPMENT') {
                 $_SESSION['Name'] = $Name;
                 $_SESSION['Surname'] = $Surname;
                 $_SESSION['Staff_id'] = $Staff_id;
                 $_SESSION['Department'] = $Department;
                 header("location: ../BusinessDevelopment.php");
               }
                elseif ($Department == 'ADMINSTRATION') {
                 $_SESSION['Name'] = $Name;
                 $_SESSION['Surname'] = $Surname;
                 $_SESSION['Department'] = $Department;
                 $_SESSION['Staff_id'] =$Staff_id;
                 header("location: ../Admin.php");
                }
                elseif ($Department == 'PROJECT MANAGER') {
                 $_SESSION['Name'] = $Name;
                 $_SESSION['Surname'] = $Surname;
                 $_SESSION['Department'] = $Department;
                 $_SESSION['Staff_id'] = $Staff_id;
                 header("location: ../Project_Manager.php");
               }
                elseif ($Department == 'SUPPORT') {
                 $_SESSION['Name'] = $Name;
                 $_SESSION['Surname'] = $Surname;
                 $_SESSION['Department'] = $Department;
                 $_SESSION['Staff_id'] = $Staff_id;
                 header("location: ../Support.php");

               }
                elseif ($Department == 'OFFICER') {
                 $_SESSION['Name'] = $Name;
                 $_SESSION['Surname'] = $Surname;
                 $_SESSION['Department'] = $Department;
                 $_SESSION['Staff_id'] = $Staff_id;
                 header("location: ../Field.php");

               }
               else{
                session_start();
                $_SESSION['login'] =  "Access denied to the requested page";
                header('location: ../page-login.php');
               }
               
             }
             else{
               session_start();
               $_SESSION['login'] =  "Invalid Password";
               header('location: ../pages/page-login.php');
             }
   			
   		}

	}catch (Exception $e)
	{
		 echo 'Message: ' .$e->getMessage();
	}
}else{
	echo "failed";
}