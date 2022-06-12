<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{


$Name=$_POST['Name'];
$No_ID=$_POST['No_ID'];
$Phone_Number=$_POST['Phone_Number'];
$Date=$_POST['Date'];
$Faculty=$_POST['Faculty'];
$Room_Name=$_POST['Room_Name'];
$Requirement=$_POST['Requirement'];
$id=$_GET['id'];
$query="update setup set Name=?, No_ID=?, Phone_Number=?, Date=?, Faculty=?, Room_Name=?, Requirement=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssssi',$Name, $No_ID, $Phone_Number, $Date, $Faculty, $Room_Name, $Requirement, $id);
$stmt->execute();
echo"<script>alert('Course has been Updated successfully');</script>";
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
	<title>Edit Course</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('include/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Requirement </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Requirement</div>
									<div class="panel-body">
	<form method="post" class="form-horizontal">
	<?php	
	$id=$_GET['id'];
	$ret="select * from setup where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
					<div class="hr-dashed"></div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-sm-8">
					<input type="text"  name="Name" value="<?php echo $row->Name;?>"  class="form-control"> </div>
					</div>

				 	<div class="form-group">
					<label class="col-sm-2 control-label">ID</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="No_ID" id="No_ID" value="<?php echo $row->No_ID;?>" required="required">
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Phone Number</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="Phone_Number" value="<?php echo $row->Phone_Number;?>" >
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Date</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="Date" value="<?php echo $row->Date;?>" >
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Faculty</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="Faculty" value="<?php echo $row->Faculty;?>" >
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Room Name</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="Room_Name" value="<?php echo $row->Room_Name;?>" >
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Requirement</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="Requirement" value="<?php echo $row->Requirement;?>" >
					</div>
					</div>


<?php } ?>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Update Requirement">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>