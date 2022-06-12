<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add room
if($_POST['submit'])
{
	$Name=$_POST['Name'];
	$No_ID=$_POST['No_ID'];
	$Phone_Number=$_POST['Phone_Number'];
	$Date=$_POST['Date'];
	$Faculty=$_POST['Faculty'];
	$Room_Name=$_POST['Room_Name'];
	$Requirement=$_POST['Requirement'];

$query="insert into  setup (Name, No_ID, Phone_Number, Date, Faculty, Room_Name, Requirement) values(?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssss',$Name, $No_ID, $Phone_Number, $Date, $Faculty, $Room_Name, $Requirement);
$stmt->execute();
echo"<script>alert('Requirement has been added successfully');</script>";
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
	<title>Add room</title>
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
					
						<h2 class="page-title">Setup Requirement</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Setup Requirement</div>
									<div class="panel-body">

									<form method="post" class="form-horizontal">
	<?php	
	$id=$_GET['id'];
	$ret="select * from room where id=?";
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
					<label class="col-sm-6 control-label"><h4 style="color: green">Room Selected Information</h4> </label>
					</div class="col-sm-8">


					<div class="form-group">
					<label class="col-sm-2 control-label">Category</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="category" value="<?php echo $row->category;?>" >
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Room Name</label>
					<div class="col-sm-8">
					<input type="text"  name="roomname" value="<?php echo $row->roomname;?>"  class="form-control"> </div>
					</div>

				 	<div class="form-group">
					<label class="col-sm-2 control-label">Location</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="location" id="location" value="<?php echo $row->location;?>" required="required">
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label">Technician in Charge</label>
					<div class="col-sm-8">
					<input type="text" class="form-control" name="tic" value="<?php echo $row->tic;?>" >
					</div>
					</div>

<?php } ?>
						
											</div>

										</form>

										<form method="post" class="form-horizontal">

											
											<div class="hr-dashed"></div>

										<div class="form-group">
										<label class="col-sm-6 control-label"><h4 style="color: green">Please fill this information </h4> </label>
										</div class="col-sm-8">


											<div class="form-group">
												<label class="col-sm-2 control-label">Room Name</label>
												<div class="col-sm-8">
												<input type="text" class="form-control" name="Room_Name" id="Room_Name" value="" required="required">
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Your Name</label>
												<div class="col-sm-8">
													<input type="text" value="" name="Name"  class="form-control"> </div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">ID</label>
												<div class="col-sm-8">
												<input type="text" class="form-control" name="No_ID" id="No_ID" value="" required="required">
												</div>
											</div>

											<div class="form-group">
											<label class="col-sm-2 control-label">Phone Number</label>
											<div class="col-sm-8">
											<input type="text" class="form-control" name="Phone_Number" value="" >
											</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Date</label>
												<div class="col-sm-8">
												<input type="text" class="form-control" name="Date" id="Date" value="" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Faculty</label>
												<div class="col-sm-8">
												<input type="text" class="form-control" name="Faculty" id="Faculty" value="" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Requirement</label>
												<div class="col-sm-8">
												<input type="text" class="form-control" name="Requirement" id="Requirement" value="" required="required">
												</div>
											</div>

												<div class="col-sm-8 col-sm-offset-2">
													<input class="btn btn-primary" type="submit" name="submit" value="Submit">
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