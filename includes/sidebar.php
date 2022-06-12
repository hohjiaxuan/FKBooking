<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label">Main</li>
        <?PHP if(isset($_SESSION['id']))
                { 
        ?>
        <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
        <li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
        <li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Book Hostel</a></li>
        <li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
        <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li>
        <li><a href="complaint"><i class="fa fa-file-o"></i>Complaint</a></li>
      
        <br>
		<br>
        <br>
		<br>
		
        <center><img src="img/QRcode.png" alt="QRCode" width="100" height="100" ></center>
            
        <?php } else { ?>

        <li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
        <li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
        <li><a href="manager"><i class="fa fa-user"></i> Manager Login</a></li>
        <li><a href="technician"><i class="fa fa-user"></i> Technician Login</a></li>
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
