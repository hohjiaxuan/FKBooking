<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from complaint where id=?";
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
	<title>Manage Complaint</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('include/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
                        <br><br>
						<h2 class="page-title">Manage Complaint</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Complaint Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No.</th>
											<th>Complaint Type </th>
											<th>Complaint Description </th>
											<th>Reg Date </th>
											<th>Complaint Status </th>
											<th>Action</th>
										</tr>
									</thead>
								
									<tbody>

									<?php	
									$aid=$_SESSION['id'];
									$ret="select * from complaint";
									$stmt= $mysqli->prepare($ret) ;
									//$stmt->bind_param('i',$aid);
									$stmt->execute() ;//ok
									$res=$stmt->get_result();
									$cnt=1;
									while($row=$res->fetch_object())
										{
											?>
									<tr><td><?php echo $cnt;;?></td>
									<td><?php echo $row->complaintType;?></td>
									<td><?php echo $row->complaintDes;?></td>
									<td><?php echo $row->date;?></td>
									<td><?php echo $row->complaintStatus;?></td>
									<td><a href="edit-complaint.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
									<a href="manage-complaint.php?del=<?php echo $row->id;?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
									</tr>
																		<?php
									$cnt=$cnt+1;
																		} ?>
																				
									</tbody>
								</table>				
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
