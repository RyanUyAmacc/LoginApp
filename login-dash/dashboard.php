<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Dashboard</h1>
<p>Welcome <?php echo $_SESSION['username']; ?>! This is Your Dashboard</p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>