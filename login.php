<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    
</head>
<body>
  
<form class="box" action="login.php" method="POST">
            <h1>ATCOM</h1>
            <input type="text" name="uname" placeholder="Username" autocomplete="off" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
            <P class="login-register-text">Don't have password? <a href="regster.php">Register here </P>
        </form>
</body>
</html>
<?php
if(isset($_POST['login'])){
    include 'connection.php';
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $pass1=md5($pass);
    $sql="select * from users where uname='$uname' and pass='$pass1'";
    
    $result=mysqli_query($conn,$sql);
    
    $numrows=mysqli_num_rows($result);  
    if($numrows > 0)  
    {  
  
   $sql ="select position from users where uname='$uname'";
   $result = mysqli_query($conn,$sql);

   while($row=mysqli_fetch_assoc($result))  
    {  
    $position=$row['position'];  
    }  
    // Set session variables
$_SESSION["uname"] = "$uname";
   // redirect to hone page based on there position
   if($position == 'Team Leader') {
    header("Location:team_leader.php");
    exit();   
    }   
    elseif ($position == 'Project Manager') {
        header("Location:project_manager.php");
        exit();
    }
    elseif ($position == 'Senior'){
        header("Location:senior.php");
        exit();
    }
    else {
        header("Location:junior.php");
        exit();
    }
}
    else {  
    echo "<script> alert('Invalid username or password!') </script>";  
    }  
} 
?>