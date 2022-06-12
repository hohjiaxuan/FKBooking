<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add room
if($_POST['submit'])
{
$category=$_POST['category'];
$roomname=$_POST['roomname'];
$status=$_POST['status'];
$location=$_POST['location'];
$date=$_POST['date'];
$tic=$_POST['tic'];
$setup=$_POST['setup'];

$query="insert into  room(category,roomname,status,location,date,tic,setup) values(?,?,?,?,?,?,?)";

$stmt1 = $mysqli->prepare($query);

$rc1=$stmt1->bind_param('sssssss',$category,$roomname,$status,$location,$date,$tic,$setup);

$stmt1->execute();

echo"<script>alert('Room has been added successfully');</script>";
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
	<title>Add Courses</title>
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
					
						<h2 class="page-title">Add Room </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Room</div>
									<div class="panel-body">
									<form method="post" action="" name="booking" class="form-horizontal" onSubmit="return valid();">


                                                

											<div class="form-group">
                                                <label class="col-sm-2 control-label"> Room Category : </label>
                                                <div class="col-sm-8">
												<select name="category" class="form-control" required="required">
                                                        <option value="LECTURE HALL">LECTURE HALL</option>
                                                        <option value="LAB">LAB</option>
                                                        <option value="MEETING ROOM">MEETING ROOM</option>
													
                                                    </select>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label"> Room Name : </label>
                                                <div class="col-sm-8">
												<select name="roomname" class="form-control" required="required">
                                                        <option value="LH1131">LH1131</option>
                                                        <option value="LH1132">LH1132</option>
                                                        <option value="LH1133">LH1133</option>
														<option value="LH1134">LH1134</option>
                                                        <option value="LH1135">LH1135</option>

                                                        <option value="LB61">LB61</option>
														<option value="LB62">LB62</option>
                                                        <option value="LB63">LB63</option>
                                                        <option value="LB64">LB64</option>
														<option value="LB65">LB65</option>
														

														<option value="MR01">MR01</option>
														<option value="MR02">MR02</option>
                                                        <option value="MR03">MR03</option>
                                                        <option value="MR04">MR04</option>
														<option value="MR05">MR05</option>
														
                                                    </select>
                                                </div>
                                            </div>
                                            
                                                <div class="form-group">
                                                <label class="col-sm-2 control-label"> Status : </label>
                                                <div class="col-sm-8">
                                                    <select name="status" class="form-control" required="required">
                                                        <option value="AVAILABLE">AVAILABLE</option>
                                                        <option value="BOOKED">BOOKED</option>
                                                        <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"> Location : </label>
                                                <div class="col-sm-8">
												<select name="location" class="form-control" required="required">
                                                        <option value="BLOCK A">BLOCK A</option>
                                                        <option value="BLOCK B">BLOCK B</option>
                                                        <option value="BLOCK C">BLOCK C</option>
														<option value="BLOCK D">BLOCK D</option>
                                                        <option value="BLOCK E">BLOCK E</option>

                                                    
														
                                                    </select>
                                                </div>
                                            </div>

											<div class="form-group">
                                                <label class="col-sm-2 control-label"> Date : </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="date" id="date" class="form-control" required="required">
                                                </div>
                                            </div>


                                        <div class="form-group">
                                                <label class="col-sm-2 control-label"> Technician in Charge : </label>
                                                <div class="col-sm-8">
												<select name="tic" class="form-control" required="required">
												    <option value="NO ONE">NO ONE</option>
                                                    <option value="JIMMY">JIMMY</option>
                                                    <option value="FARIS">FARIS</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"> Required Setup : </label>
                                                <div class="col-sm-8">
												<input type="text" class="form-control" name="setup" value="" >
                                                </div>
                                            </div>
                                            

                                            <div class="col-sm-6 col-sm-offset-4">
                                                <button class="btn btn-default" type="cancel">Cancel</button>
                                                <input type="submit" name="submit" Value="Submit" class="btn btn-primary">
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