<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
body {font-family: 'Roboto',sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}

.back_btn{
  background-color: #595959;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: 5px;
} 
.back_btn:hover{
  background-color: #474747;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
 
<h1>Create New Task</h1>
 
<div class="container">
 
    <form method="POST" action="/itemaction">
 
        {{ csrf_field() }}
 
       <div>
          <label >Task Name</label>
          <input type="text" name="name3" placeholder="Task Name">
          <label>ID of List</label>
          <input type="text" name="name5" placeholder="ID">

 
      </div>
      <div>
            <input type="submit" value="Add Task" style="margin-bottom: 5px;">
      </div>
    </form>
     <form>
  <input class="back_btn" type="button" value="Back" onclick="history.back()">
</form>
 </div>
 
</body>
</html>