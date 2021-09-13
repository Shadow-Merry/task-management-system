<!DOCTYPE html>
<html>
<head>
	<title>Project Manager</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="to_do.css">
	<link rel="stylesheet" type="text/css" href="project_manager.css">
</head>
<body>
	<div class="menu">
	<div class="logo"><a href="#">@COM</a></div>
	<ul>
		<li><a href="#">HOME</a></li>
		<li><a href="form_task.php">NEW TASK</a></li>
		<li><a href="#">TASK PROGRESS
           <ul>
           	  <li><a href="#">TASK</a></li>
           	  <li><a href="#">NAME</a></li>
           	  <li><a href="#">POSITION</a>
                 <ul>
                 	<li><a href="#">Team Leader</a></li>
                 	<li><a href="#">Senior</a></li>
                 	<li><a href="#">Junior</a></li>
                 </ul>
           	  </li>
           </ul>
		</a></li>
		<li><a href="login.php">LOG OUT</a></li>
	</ul>
    </div>
	<div class="wrapper">
    <header>Todo App</header>
    <div class="inputField">
      <input type="text" placeholder="Add your new todo">
      <button><i class="fas fa-plus"></i></button>
    </div>
    <ul class="todoList">
      <!-- data are comes from local storage -->
    </ul>
    <div class="footer">
      <span>You have <span class="pendingTasks"></span> pending tasks</span>
      <button>Clear All</button>
    </div>
  </div>

  <script src="to_do.js"></script>
</body>
</html>