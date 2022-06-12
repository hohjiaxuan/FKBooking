<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Graph</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
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
<?php include("includes/sidebar.php");?>
     
		<br><br><br>
		<h2 class="page-title" style="margin-left:300px">VISUALIZATION REPORT OF COMPLAINT STATUS</h2>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4" style="margin-left:300px">
					<div class="card mt-4">
						<div class="card-header">Pie Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header">Doughnut Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="margin-left:300px">
					<div class="card mt-4 mb-4">
						<div class="card-header">Bar Chart</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>

<script>	
$(document).ready(function(){

	$('#submit_data').click(function(){

		var complaintStatus = $('input[name=complaintStatus]:checked').val();

		$.ajax({
			url:"data-complaintstatus.php",
			method:"POST",
			data:{action:'insert', complaintStatus:complaintStatus},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#submit_data').attr('disabled', false);

				$('#complaintStatus_1').prop('checked', 'checked');

				$('#complaintStatus_2').prop('checked', false);

				$('#complaintStatus_3').prop('checked', false);

				alert("Your Feedback has been send...");

				makechart();
			}
		})

	});

	makechart();

	function makechart()
	{
		$.ajax({
			url:"data-complaintstatus.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var complaintStatus = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					complaintStatus.push(data[count].complaintStatus);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:complaintStatus,
					datasets:[
						{
							label:'Vote',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#pie_chart');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});

				var group_chart2 = $('#doughnut_chart');

				var graph2 = new Chart(group_chart2, {
					type:"doughnut",
					data:chart_data
				});

				var group_chart3 = $('#bar_chart');

				var graph3 = new Chart(group_chart3, {
					type:'bar',
					data:chart_data,
					options:options
				});
			}
		})
	}

});
</script>