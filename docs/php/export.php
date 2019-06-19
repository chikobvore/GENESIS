<?php

require '../dbh/dbh.php';

if (isset($_POST['project']))
{
	$Project_id = $_POST['project'];

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="Budget.csv"');
    $output = fopen('php://output', 'wb');

    

    $sql = "SELECT title,Description FROM projects WHERE Project_id = '$Project_id'";
    $result = mysqli_query($Conn,$sql);
    $confirm = mysqli_num_rows($result);

    if($confirm > 0 )
    {
    	while ($row = mysqli_fetch_assoc($result))
    	{
    		$title = $row['title'];
    		$Description = $row['Description'];
    	}
    	// fputcsv($output,array('Project Title: ',$title));
    	// fputcsv($output,array('Description: ',$Description));
    }
    fputcsv($output,array('Resource','Estimated Cost','Actual'));

    $sql = "SELECT Resource,Estimated_cost FROM projects_budgets WHERE Project_id = '$Project_id'";
    $result = mysqli_query($Conn,$sql);
    $confirm = mysqli_num_rows($result);

    if($confirm > 0)
    {
    	while($row = mysqli_fetch_assoc($result))
    	{
    		fputcsv($output,array($row['Resource'],$row['Estimated_cost']));
    	}
    }

    fclose($output);
}