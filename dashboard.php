<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <header class="image-header">
        
        <img src="wyxina-tresse-aq853a_jpKA-unsplash.jpg" alt="Header Image">
            <div class="header-overlay">
                 <a href="#" class="logo">fiDell</a>
            <a href="logout.php" class="logout-button">Log Out</a>
        </div>
    </header>
    <div class="content">
        <p>
            Hello <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users. * FROM users WHERE users.email='$email' ");
                while($row=mysqli_fetch_array($query)){
                    echo $row['email'];
                }
            }
            ?>
        </p>
    </div>
    <footer class="main-footer">
        <p>&copy; <?php echo date("Y"); ?> fiDell. All rights reserved.</p>
    </footer>
</body>
</html>

