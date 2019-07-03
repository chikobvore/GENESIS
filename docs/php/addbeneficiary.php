<?php
require '../dbh/dbh.php';
session_start();

if (isset($_POST['Project']))
{
	$i = 0;
	$Project_id = $_POST['Project'];
	$Staff_id = $_SESSION['Staff_id'];
	while (!empty($_POST['Field'.$i]))
	{

		$field = $_POST['Field'.$i];
		$sql = "INSERT INTO Beneficiary_Fields (Staff_id,Project_id,Field) VALUES ('$Staff_id',$Project_id,'$field')";
		if ($Conn->query($sql) == TRUE)
		{
			if ($_POST['Subfield'.$i] == 'yes')
			{
				$k = 0;
				$sql = "SELECT Field_id FROM Beneficiary_fields WHERE Project_id = $Project_id AND Field = '$field'";

				$result = mysqli_query($Conn,$sql);
				$confirm = mysqli_num_rows($result);

				if ($confirm > 0)
				{
					while ($row = mysqli_fetch_assoc($result))
					{
						$Field_id = $row['Field_id'];
						while(!empty($_POST['sub'.$i.$k]))
						{
							$Subfield = $_POST['sub'.$i.$k];
							$sql = "INSERT INTO Beneficiary_Subfields(Field_id,Project_id,Subfield) VALUES ($Field_id,$Project_id,'$Subfield')";
							if ($Conn->query($sql) == FALSE)
							{
								echo "ERROR: " . $sql . "<br>" . $Conn->error;
							}
							$k = $k + 1;
						}
					}

				}
			}	
		}else{
			 echo "ERROR: " . $sql . "<br>" . $Conn->error;
		}



		$i = $i + 1;
	}
}else{
	echo "not set";
}
// $_SESSION['message'] = $Conn->error;
header('location: ../beneficiary.php');