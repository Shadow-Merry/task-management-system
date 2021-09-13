<html>
    <head>
        <title> List of senior task </title>
        <style>
table{
width: 100%;
margin-left: auto;
margin-right: auto;
}
th{
	background-color: #9fa8a3;
}
td{
	background-color: #fff;
}
th, td{
	text-align: left;
	padding: 10px;
}
table, th, td{
border: 1px solid #000;
border-collapse: collapse;
}
</style>
</head>
<body>
</body>
</html>
<?php
 include 'connection.php';
 $sql = "select * from tasks where assigned_to in (select fname from users where position = 'senior')";
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
            <th>ASSIGNED TO </th>
            <th>ASSIGNED BY </th>
            <th>STATUS </th>";
$i=0;
while($row = mysqli_fetch_array($result))

  {
  
  echo "<tr>";
  $i+=1;
 
  echo "<td> $i </td>";
  echo "<td>" . $row['task_name'] . "</td>";

  echo "<td>" . $row['priority'] . "</td>";

  echo "<td>" . $row['start_date'] . "</td>";

  echo "<td>" . $row['end_date'] . "</td>";

  echo "<td>" . $row['discription'] . "</td>";

  echo "<td>" . $row['file'] . "</td>";

  echo "<td>" . $row['assigned_to'] . "</td>";

  echo "<td>" . $row['assigned_by'] . "</td>";

  echo "<td>" . $row['status'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
}
else {
    echo " no task assigned to you yet";
}
?>