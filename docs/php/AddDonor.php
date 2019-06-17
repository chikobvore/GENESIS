<?php

require '../dbh/dbh.php';

if(isset($_POST['contact']) && isset($_POST['organization']) && isset($_POST['Address']) && isset($_POST['email']) && isset($_POST['specilization']) && isset($_POST['donated']) && isset($_POST['globaldisbursement']))
{
	$contact = $_POST['contact'];
	$organization = $_POST['organization'];
	$Address = $_POST['Address'];
	$email = $_POST['email'];
	$specilization = $_POST['specilization'];
	$donoted = $_POST['donated'];
	$region = $_POST['region'];
	$Disbursement = $_POST['globaldisbursement'];


	$sql = "INSERT INTO Donors
			(Contact,Organization,Physical_Address,Email,Specilization,Donoted,Disbursement,region)
			VALUES 
	('$contact','$organization','$Address','$email','$specilization','$donoted','$Disbursement','$region')";

	if($Conn->query($sql) == TRUE)
	{

		if($donoted == 'Yes')
		{
			$sql = "SELECT Donor_id FROM Donors WHERE Organization = '$organization' AND Physical_Address = '$Address' AND Contact = '$contact'";
			$result = mysqli_query($Conn,$sql);
	        $confirm = mysqli_num_rows($result);

	        if($confirm > 0)
	        {
	        	while($row = mysqli_fetch_assoc($result))
	        	{
	        		$Donor_id = $row['Donor_id'];
	        	}
	        	$input1 = $_POST['1'];
	        	$input2 = $_POST['2'];
	        	$input3 = $_POST['3'];
	        	$input4 = $_POST['4'];
	        	$input5 = $_POST['5'];
	        	$input6 = $_POST['6'];
	        	$input7 = $_POST['7'];
	        	$input8 = $_POST['8'];
	        	$input9 = $_POST['9'];
	        	$input10 = $_POST['10'];

	        	$projects = array($input1,$input2,$input3,$input4,$input5);
	        	$amounts  = array($input6,$input7,$input8,$input9,$input10);

	        	for ($i=0; $i < 5; $i++)
	        	{ 
	        		if(!empty($projects[$i]) && !empty($amounts[$i]))
	        		{
	        			$sql = "INSERT INTO Donated (Donor_id,Project,Amount) VALUES ('$Donor_id','$projects[$i]','$amounts[$i]')";
	        			if($Conn->query($sql) == TRUE)
	        			{
	        				$_SESSION['message'] = "Donor successfully added";
	        				header('location: ../donors.php');
	        			}

	        		}

	        	}

	        }else{
					echo "Error0: " . $sql . "<br>" . $Conn->error;
				}
	    }else{
	     	header('location: ../donors.php');
	     }
	}else{
		echo "Error1: " . $sql . "<br>" . $Conn->error;
	}
}else{
	$contact = $_POST['contact'];
	$organization = $_POST['organization'];
	$Address = $_POST['Address'];
	$email = $_POST['email'];
	$specilization = $_POST['specilization'];
	$donated = $_POST['donated'];
	$Disbursement = $_POST['globaldisbursement'];
	echo "We are here";
	echo $contact;
	echo $organization;
	echo $Address;
	echo $email;
	echo $specilization;
	echo $donated;
	echo $Disbursement;

}
// header('location: ../BusinessDevelopment.php');