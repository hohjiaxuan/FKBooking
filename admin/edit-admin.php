<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$id=$_GET['id'];
$query="update admin set username=?, email=?, password=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssi',$username,$email,$password,$id);
$stmt->execute();
echo"<script>alert('Admin details has been updated.');</script>";
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
	<title>Edit Admin Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Admin Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Admin Details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
	<?php	
	$id=$_GET['id'];
	$ret="select * from admin where id=?";
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
												<label class="col-sm-2 control-label">Admin ID :</label>
												<div class="col-sm-8">
													<input type="text" value="<?php echo $row->id;?>" name="id"  class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Username :</label>
												<div class="col-sm-8">
													<input type="text" value="<?php echo $row->username;?>" name="username" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Email :</label>
												<div class="col-sm-8">
													<input type="text" value="<?php echo $row->email;?>" name="email" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Password :</label>
												<div class="col-sm-8">
													<input type="text" value="<?php echo $row->password;?>" name="password" class="form-control" required="required">
												</div>
											</div>

											<?php } ?>
											<div class="col-sm-8 col-sm-offset-2">
												<input class="btn btn-primary" type="submit" name="submit" value="Update Admin Details ">
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
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>

</script>
</body>

</html>