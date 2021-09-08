<!DOCTYPE html>
<html>
<head>
	<title>Add Task</title>
	<link rel="stylesheet" type="text/css" href="form_task.css">
</head>
<body>
     <form class="box">
     	<h1>@COM</h1>
     	TASK NAME:<input type="text" name=""></br>
        ASSIGNED TO: <select id="team" name="team">
            <option value="leader">Team Leader</option>
            <option value="Senior">Senior System Developer</option>
            <option value="Junior">Junior Sytem Developer</option>
        </select></br>

        START DATE:<input type="Date" name="task start Date"></br>
        END DATE:<input type="Date" name="task end Date"></br>
        PRIORITY: <select id="team" name="team">
            <option value="High">High</option>
            <option value="mid">Medium</option>
            <option value="lowr">Low</option>
        </select></br>

       DISCRIPTION OF THE TASK:</br><textarea name="message" rows="10" cols="40"></textarea></br>

       ATTACH FILE:<input type="FILE" name="attach"></br>

       <input type="submit" name="">
     </form>
    
</body>
</html>