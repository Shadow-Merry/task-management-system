<?php
// Start the session
session_start();
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Task</title>
	<link rel="stylesheet" type="text/css" href="form_task.css">
</head>
<body>
     <form class="box"  action="form_task.php" method="post" enctype="multipart/form-data" autocomplete="off">
     	<h1>@COM</h1>
     	TASK NAME:<input type="text" name="tname"></br>
        ASSIGNED TO: <select id="team" name="assigned_to">
        <?php
        include 'connection.php';
        $name = $_SESSION['uname'];
        echo $name;
        $sql = "select fname from users where position='junior'";
        $list=mysqli_query($conn,$sql);

        $row = mysqli_num_rows($list);
         while ($row = mysqli_fetch_array($list)){
         echo "<option value='". $row['fname'] ."'>" .$row['fname'] ."</option>" ;
       }
           
        ?>
        </select></br>
        START DATE:<input type="Date" name="start_date"></br>
        END DATE:<input type="Date" name="end_date"></br>
        PRIORITY: <select id="team" name="priority">
            <option value="High">High</option>
            <option value="mid">Medium</option>
            <option value="lowr">Low</option>
        </select></br>

       DISCRIPTION OF THE TASK:</br><textarea name="discription" rows="10" cols="40"></textarea></br>

       ATTACH FILE:<input type="FILE" name="file"></br>

       <input type="submit" name="submit" value="Add Task">
     </form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
include 'connection.php';
$task_name = $_POST['tname'];
$assigned_to = $_POST['assigned_to'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$priority = $_POST['priority'];
$dis = $_POST['discription'];
$assigned_by = $_SESSION['uname'];
$sql = " insert into tasks (task_name,assigned_to,start_date,end_date,priority,discription,assigned_by,status) values ('$task_name','$assigned_to','$start_date','$end_date','$priority','$dis','$assigned_by','In-progress)";
$result = mysqli_query($conn,$sql);
}
?>
