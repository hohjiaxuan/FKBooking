<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label">Main</li>
        <?PHP if(isset($_SESSION['id']))
                { ?>
        <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
        <li><a href="assigned_manager.php"><i class="fa fa-desktop"></i>Accomodation List</a></li>
        <li><a href="BookingList.php"><i class="fa fa-file-o"></i>Booking List</a></li>
        <li><a href="report-roomstatus.php"><i class="fa fa-file-o"></i>Status Report</a></li>
        <li><a href="#"><i class="fa fa-files-o"></i> Complaint </a>
            <ul>
                <li><a href="add-complaint.php">Submit A Complaint</a></li>
                <li><a href="manage-complaint.php">Manage Complaint</a></li>              
            </ul>
        </li>
        <li><a href="graph-complaint.php"><i class="fa fa-files-o"></i>Visualization Report</a></li>

        <br>
		<br>
        <br>
		<br>
        <br>
		<br>
		
        <center><img src="img/QRcode.png" alt="QRCode" width="100" height="100" ></center>

        <?php } else { ?>

        <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
        <li><a href="assigned_manager.php"><i class="fa fa-desktop"></i>Accomodation List</a></li>
        <li><a href="BookingList.php"><i class="fa fa-file-o"></i>Booking List</a></li>
        <li><a href="report-roomstatus.php"><i class="fa fa-file-o"></i>Status Report</a></li>
        <li><a href="#"><i class="fa fa-files-o"></i> Complaint </a>
            <ul>
                <li><a href="add-complaint.php">Submit A Complaint</a></li>
                <li><a href="manage-complaint.php">Manage Complaint</a></li>              
            </ul>
        </li>
        <li><a href="graph-complaint.php"><i class="fa fa-files-o"></i>Visualization Report</a></li>

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
