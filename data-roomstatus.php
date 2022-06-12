<?php


$connect = new PDO("mysql:host=localhost;dbname=fkreserv", "root", "");

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT status, COUNT(id) AS Total 
		FROM room 
		GROUP BY status
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'status'		=>	$row["status"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data);
	}
}


?>

