<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from setup where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Manage Courses</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$ ( function() {
			$( ".datepicker" ).datepicker({
				dateFormat: 'dd-mm-yy',
				changeMonth: true,
				changeYear: true
			});
	} );
</script>

</head>

<body background="img/ump5.jpg">
				<div class="row">
					<div class="col-md-12">
					<br><br>
						<h2 class="page-title" style="color: white">Booking List Report</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Booking List Report</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>no.</th>
											<th>Name</th>
											<th>ID</th>
											<th>Phone_Number</th>
											<th>Booking Date</th>
											<th>Faculty	</th>
											<th>Room_Name</th>
											<th>Requirement</th>
										</tr>
									</thead>
									
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from setup";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->Name;?></td>
<td><?php echo $row->No_ID ;?></td>
<td><?php echo $row->Phone_Number;?></td>
<td><?php echo $row->Date;?></td>
<td><?php echo $row->Faculty;?></td>
<td><?php echo $row->Room_Name;?></td>
<td><?php echo $row->Requirement;?></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
									</tbody>
								</table>

                            <div>
                                <button onclick="window.print()" class="btn btn-primary">Print</button>
                            </div>

							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
