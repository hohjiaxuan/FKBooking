<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add room
if($_POST['update'])
{

$status=$_POST['status'];
$id=$_GET['id'];
$query="update room set status=?  where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('si',$status,$id);
$stmt->execute();
echo"<script>alert(' has been Updated successfully');</script>";

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
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Room </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit room</div>
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
												<label class="col-sm-2 control-label">Category </label>
												<div class="col-sm-8">
													<input type="text" value="<?php echo $row->category;?>" disabled class="form-control"><span class="help-block m-b-none">
													</span> </div>
											</div>


				 <div class="form-group">
				<label class="col-sm-2 control-label">Room Name</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="roomname" id="cns" value="<?php echo $row->roomname;?>" disabled required="required">
						 </div>
						</div>


									<div class="form-group">
									<label class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="status" value="<?php echo $row->status;?>"  >
                                        
                                       <span class="help-block m-b-none">
													notify that the preparation is completed to READY.</span> 
                                        
												</div>
											</div>
                                            
                                            


											<div class="form-group">
									<label class="col-sm-2 control-label">Location</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="location" value="<?php echo $row->location;?>" disabled >
												</div>
											</div>


											

											<div class="form-group">
									<label class="col-sm-2 control-label">Technician in Charge</label>
									<div class="col-sm-8">
									<input type="text" class="form-control" name="tic" value="<?php echo $row->tic;?>" disabled>
												</div>
											</div>


                                            <div class="form-group">
									<label class="col-sm-2 control-label">Date Change</label>
									<div class="col-sm-8">
									<input type="text" class="form-control"  name="reg_date" value="<?php date_default_timezone_set("Asia/Kuala_Lumpur");
echo "The date update " . date("Y-m-d");?>" disabled >
                                        
                                        
                                        
												</div>
											</div>






<?php } ?>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="update" value="Update ">
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