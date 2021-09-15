<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="to_do.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Todo </header>
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