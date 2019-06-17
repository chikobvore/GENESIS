<?php
    require '../dbh/dbh.php';

    if(isset($_POST['pid']) && isset($_POST['1']) && isset($_POST['7']))
    {
            $id        =$_POST['pid'];
            $n1        = $_POST['1'];
            $n2        = $_POST['2'];
            $n3        = $_POST['3'];
            $n4        = $_POST['4'];
            $n5        = $_POST['5'];
            $n6        = $_POST['6'];
            $n7        = $_POST['7'];
            $n8        = $_POST['8'];
            $n9        = $_POST['9'];
            $n10       = $_POST['10'];
            $n11        = $_POST['11'];
            $n12        = $_POST['12'];
            $n13        = $_POST['13'];
            $n14        = $_POST['14'];
            $n15        = $_POST['15'];
            $n16        = $_POST['16'];
            $n17        = $_POST['17'];
            $n18        = $_POST['18'];
            $n19        = $_POST['19'];
            $n20       = $_POST['20'];
            $n21       = $_POST['input21'];
            $n22       = $_POST['input22'];

                          
            $inputs = array($n1,$n2,$n3, $n4,$n5,$n6,$n13,$n14,$n15,$n16,$n17);
            $numbers = array($n7,$n8,$n9,$n10,$n11,$n12,$n18,$n19,$n20,$n21,$n22);

            $sql = "SELECT Project_id FROM projects WHERE REF_NUM = $id";
            $result = mysqli_query($Conn,$sql);
            $confirm = mysqli_num_rows($result);
            
            if($confirm >0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $Project_id = $row['Project_id'];
                }
            }

            for ($i=0; $i <11 ; $i++)
            { 

              if (!empty($inputs[$i]))
              {
                  $sql = "INSERT INTO projects_budgets (Project_id,Resource,Estimated_cost,Status) VALUES ($Project_id,'$inputs[$i]',$numbers[$i],'PENDING')"; 
                      if ($Conn->query($sql) === FALSE)
                      {
                             echo "Error: " . $sql . "<br>" . $Conn->error; 
                      }
              }
            }
            $_SESSION['message'] = "Budget successfully uploaded";
            header('location: ../Project_manager.php');
    }