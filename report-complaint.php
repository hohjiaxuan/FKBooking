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
    <title>Complaint Report</title>
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
	
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
                        <br><br>
                        <h2 class="page-title">REPORT</h2>
                        <div class="panel panel-default">
                            
                            
                                <table class="table table-bordered" cellspacing="0" width="100%">
                                <thead>
										<tr>
											<th>No.</th>
											<th>Complaint Type </th>
											<th>Complaint Description </th>
											<th>Reg Date </th>
											<th>Complaint Status </th>
										</tr>
									</thead
                                    
                                    
                                     
                                        <?php	
                                            $aid=$_SESSION['id'];
                                            $ret="SELECT * FROM complaint ";
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
									    </tr>

                                        <?php
                                            $cnt=$cnt+1;
									 }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button onclick="window.history.back()" class="btn btn-primary"> Back </button>
        <button onclick="window.print()" class="btn btn-primary"> Print </button>
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
