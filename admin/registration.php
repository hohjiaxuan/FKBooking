<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration
if($_POST['submit'])
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
		
	$query="insert into admin (username, email, password) values(?,?,?)";
	$stmt = $mysqli->prepare($query);
	$rc=$stmt->bind_param('sss',$username,$email,$password);
	$stmt->execute();
	echo"<script>alert('User added successfully');</script>";
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
	<title>User Registration</title>
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
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>
function getSeater(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'roomid='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
</script>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">User Registration Panel</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">User Registration</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">


										<div class="form-group">
												<label class="col-sm-2 control-label">Reg. no. :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="regNo"  class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">First name :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="firstName" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Middle name :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="middleName" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Last name :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="lastName" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Gender: </label>
												<div class="col-sm-8">
													<select name="gender" class="form-control" required="required">
														<option value="">Select Gender</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="others">Others</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Contact no. :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="contactNo"  class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Email :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="email"  class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Password :</label>
												<div class="col-sm-8">
													<input type="text" value="" name="password"  class="form-control">
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
</body>
<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'roomno='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

</html>