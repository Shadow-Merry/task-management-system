<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>try</title>
	<link rel="stylesheet" type="text/css" href="team leader.css">
</head>
<body>
	<div class="menu">
	<ul>
		<li><a href="#">ASSIGNED TASK</a></li>
		<li><a href="form_task.php">NEW TASK</a></li>
		<li><a href="#">TASK PROGRESS
           <ul>
              <li><a href="senior.php">Senior</a></li>
              <li><a href="junior.php">Junior</a></li>
                 </ul>
           	  </li>
		</a></li>
    <li><a href="to_do.php">TO DO</a></li>
		<li><a href="login.php">LOG OUT</a></li>
	</ul>
    </div>
</body>
</html>
<?php