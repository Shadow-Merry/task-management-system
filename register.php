<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <script>
function passcheck() {
  let x = document.forms["form"]["pass"].value;
  let y = document.forms["form"]["passc"].value;
  if (x != y) {
    alert("The password's are not same !!!");
    return false;
  }
}
</script>

</head>
<body>
  
<form class="box" name ="form" action="register.php" method="POST" autocomplete = "off" onsubmit="return passcheck()">
            <h1>ATCOM</h1>
            First Name:<input type="text" name="fname" placeholder="First Name" required></br>
            Last Name:<input type="text" name="lname" placeholder="Last Name" required><br>
            UserName :  <input type="text" name="uname" placeholder="username" required><br>
        Email: <input type="email" name="emails" placeholder="email" required> <br>
             Postion : <select class="select" type="select" name="position" required>
                <option>  </option>
                <option> Project Manager </option>
                <option> Team Leader</option>
                <option> Senior </option>
                <option> Junior</option>
            </select>
             </br>
            Password:<input type="password" name="pass" placeholder="password" required><br>
            Comfirm Password:<input type="password" name="passc" placeholder="Comfirm password" required><br>
            <input type="submit" name="login" value="Login">
            <input type="submit" name="" value="Cancle">
            </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    include 'connection.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$emails=$_POST['emails'];
$position=$_POST['position'];
$pass=$_POST['pass'];
$pass= md5($pass);
$sql = "select * from users where uname = '$uname'";
$result = mysqli_query($conn,$sql);
$numrows=mysqli_num_rows($result);  
if($numrows > 0)  {
    echo "<script> alert('user name taken try again!') </script>";  
}
else{
$sql="insert into users (fname,lname,uname,email,position,pass) values ('$fname','$lname','$uname','$emails','$position','$pass')";
$result = mysqli_query($conn,$sql);
// Set session variables
$_SESSION["uname"] = "$uname";
$sql ="select position from users where uname='$uname'";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))  
 {  
 $position=$row['position'];  
 }  
// redirect to home page based on there position
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
}
?>