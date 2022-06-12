<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label">Main</li>
        <?PHP if(isset($_SESSION['id']))
                { ?>
        <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
        <li><a href="assigned_manager.php"><i class="fa fa-desktop"></i>Accomodation List</a></li>
        <li><a href="BookingList.php"><i class="fa fa-file-o"></i>Booking List</a></li>
        <li><a href="BookingReport.php"><i class="fa fa-file-o"></i>Report</a></li>
        
        <br>
		<br>
        <br>
		<br>
        <br>
		<br>
		
        <center><img src="img/QRcode.png" alt="QRCode" width="100" height="100" ></center>
        <?php } else { ?>

        <li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
        <li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
        <li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
        <br>
		<br>
        <br>
		<br>
        <br>
		<br>
		
        <center><img src="img/QRcode.png" alt="QRCode" width="100" height="100" ></center>
        <?php } ?>

    </ul>
</nav>
