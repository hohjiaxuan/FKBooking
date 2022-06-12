<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body background="img/ump5.jpg">
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("include/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<h2 class="panel-body text-light" style="font-size:60px;">Dashboard</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">Room List</div>
												</div>
											</div>

											<a href="assigned_manager.php" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>

										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
												<div class="stat-panel-number h1 ">Booking List</div>
												</div>
											</div>
											<a href="BookingList.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="calendar">
										<div class="calendar-picture">
											<h2>14, Tuesday</h2>
											<h3>June</h3>
										</div>

										<div class="calendar-date" id="lc">
											<div class="calendar_day">Mo</div>
											<div class="calendar_day">Tu</div>
											<div class="calendar_day">Wed</div>
											<div class="calendar_day">Th</div>
											<div class="calendar_day">Fr</div>
											<div class="calendar_day">Sa</div>
											<div class="calendar_day">Su</div>
											<div class="calendar__number"></div>
											<div class="calendar__number"></div>
											<div class="calendar__number">1</div>
											<div class="calendar__number">2</div>
											<div class="calendar__number">3</div>
											<div class="calendar__number">4</div>
											<div class="calendar__number">5</div>
											<div class="calendar__number">6</div>
											<div class="calendar__number">7</div>
											<div class="calendar__number">8</div>
											<div class="calendar__number">9</div>
											<div class="calendar__number">10</div>
											<div class="calendar__number">11</div>
											<div class="calendar__number">12</div>
											<div class="calendar__number">13</div>
											<div class="calendar__number calendar__number--current">14</div>
											<div class="calendar__number">15</div>
											<div class="calendar__number">16</div>
											<div class="calendar__number">17</div>
											<div class="calendar__number">18</div>
											<div class="calendar__number">19</div>
											<div class="calendar__number">20</div>
											<div class="calendar__number">21</div>
											<div class="calendar__number">22</div>
											<div class="calendar__number">23</div>
											<div class="calendar__number">24</div>
											<div class="calendar__number">25</div>
											<div class="calendar__number">26</div>
											<div class="calendar__number">27</div>
											<div class="calendar__number">28</div>
											<div class="calendar__number">29</div>
											<div class="calendar__number">30</div>
										</div>
									</div>	
										
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<?php
													$result2 ="SELECT count(*) FROM complaint ";
													$stmt2 = $mysqli->prepare($result2);
													$stmt2->execute();
													$stmt2->bind_result($count2);
													$stmt2->fetch();
													$stmt2->close();
													?>
													
													<div class="stat-panel-number h1 "><?php echo $count2;?></div>
													<div class="stat-panel-title text-uppercase">Total Complaint</div>
												</div>
											</div>
											<a href="report-complaint.php" class="block-anchor panel-footer text-center">General Report &nbsp; <i class="fa fa-arrow-right"></i></a>
											<a href="manage-complaint.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>										</div>
										</div>
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
	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>



<style> .foot{text-align: center; border: 1px solid black;}</style>
<style> 
.foot{text-align: center; border: 1px solid black;}
.calendar {
  float:right;
  text-align:center;;
  width: 300px;
  background-color: #fff;
  box-sizing: border-box;
  box-shadow: 0 10px 50px rgba(#000, 0.5);
  border-radius: 15px;
  overflow: hidden;
}
.calendar-picture h2{margin: 0;}
.calendar-picture h3{margin:0; font-weight:500;}
.calendar-picture {
  position: relative;
  height: 200px;
  padding: 20px;
  color: #fff;
  background: #262626 url("img/photo.jpg") no-repeat center / cover;
  text-shadow: 0 2px 2px rgba(#000, 0.2);
  box-sizing: border-box;
}
.calendar-picture::before {
    content: "";
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to top, rgba(#000, 0.25), rgba(#000, 0.1));
  }

.calendar-date {
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25px, 1fr));
  grid-gap: 10px;
  box-sizing: border-box;
}
.calendar_day {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 25px;
  font-weight: 600;
  color: #262626;
}
.calendar_day:nth-child(7) {
    color: #ff685d;
  }

.calendar__number {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 25px;
  color: #262626;
}

.calendar__number:nth-child(7n) {
    color: #ff685d;
    font-weight: 700;
  }

.calendar__number--current,
.calendar__number:hover {
    background-color: #009688;
    color: #fff !important;
    font-weight: 700;
    cursor: pointer;
  }
</style>
</html>
