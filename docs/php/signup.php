<?php
 require '../dbh/dbh.php';
 require '../dbh/Bcrypt.php';
 // hash the password => returns hashed password
   // Bcrypt::hashPassword($password);
    
    // check $password against the $hashedPassword => returns true/false
  //  Bcrypt::checkPassword($password, $hashedPassword);
  if (isset($_POST['email']) && isset($_POST['p1']) && isset($_POST['id']) && isset($_POST['p2'])) 
  {

              $email = $_POST['email'];
              $p1 = $_POST['p1'];
              $id = $_POST['id'];
              $p2 = $_POST['p2'];

              if ($p1 === $p2)
              {

                  $pass = Bcrypt::hashPassword($p1); 

                 $sql = "SELECT Password FROM Employees WHERE Staff_id = '$id'";
                 $result = mysqli_query($Conn,$sql);
                 $confirm = mysqli_num_rows($result);
                  if ($confirm > 0)
                  {
                                      $sql ="UPDATE Employees SET Password = '$pass' WHERE Staff_id = '$id'";
                                      if ($Conn->query($sql) === TRUE)
                                            {
                                                header("location: ../page-login.php");
                                            }else{
                                                echo "Error5: " . $sql . "<br>" . $Conn->error;
                                              }
                  }
                   
                            
              }
           
  }else{
    echo $_POST['p1'];
    echo $_POST['email'];
    echo $_POST['p2'];
    echo $_POST['id'];
    echo "Front-end input validation Error Review javaScript ";
  }