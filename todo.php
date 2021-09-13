<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "testm");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must enter the to do list before submitting";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: todo.php');
		}
	}	

?>

<html>
<head>
	<title>My TODO list</title>
<link rel="stylesheet" type="text/css" href="todo.css">

    <script>
function check() {
  document.getElementById("try").style.textDecoration = "line-through";
}
</script>


</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">MY TODO LIST</h2>
	</div>
	<form method="post" action="todo.php" class="input_form">
<?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>

		<?php 
		 $sql = "select * from tasks";
$result = mysqli_query($db,$sql);
if($result){
echo "<table>
<tr>
    		<th>TASK NO.</th>
    		<th>TASK NAME</th>
            <th> Progress </th>";
$i=0;
while($row = mysqli_fetch_array($result))

  {
  echo "<tr>";
  $i+=1;
 
  echo "<td> $i </td>";
  echo "<td id ='try' onclick='check()'>" . $row['task'] . "</td>";
  

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
