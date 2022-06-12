<?php


$connect = new PDO("mysql:host=localhost;dbname=fkreserv", "root", "");

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT complaintStatus, COUNT(id) AS Total 
		FROM complaint 
		GROUP BY complaintStatus
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'complaintStatus'	=>	$row["complaintStatus"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>

