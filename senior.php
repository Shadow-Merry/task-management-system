<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Atcom</title>
	<link rel="stylesheet" type="text/css" href="senior.css">
</head>
<body>
	<div class="menu">
	<ul>
		<li><a href="senior.php">ASSIGNED TASK</a></li>
		<li><a href="form_task.php">NEW TASK</a></li>
		<li><a href="#">JUNIOR TASK PROGRESS</a></li>
        <li><a href="to_do.php">TO DO</a></li>
		<li><a href="login.php">LOG OUT</a></li>
	</ul>
    </div>
    </br>
</br>

    <?php
 include 'connection.php';
 $uname = $_SESSION['uname'];
 $sql = "select * from tasks where assigned_to ='$uname'";
$result = mysqli_query($conn,$sql);
if($result){
echo "<table>
<tr>
    		<th>TASK NO.</th>
    		<th>TASK NAME</th>
    		<th>PRIORITY</th>
    		<th>START DATE</th>
    		<th>END DATE</th>
    		<th>DESCRRIPTION</th>
    		<th>ATTACHED FILE</th>
            <th>ASSIGNED BY </th>";

while($row = mysqli_fetch_array($result))

  {
  
  echo "<tr>";
  
 $i+=1;
  echo "<td> $i </td>";
  echo "<td>" . $row['task_name'] . "</td>";

  echo "<td>" . $row['start_date'] . "</td>";

  echo "<td>" . $row['end_date'] . "</td>";

  echo "<td>" . $row['priority'] . "</td>";

  echo "<td>" . $row['discription'] . "</td>";

  echo "<td>" . $row['file'] . "</td>";

  echo "<td>" . $row['assigned_by'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
}
else {
    echo " no task assigned to you yet";
}
?>

</body>
</html>