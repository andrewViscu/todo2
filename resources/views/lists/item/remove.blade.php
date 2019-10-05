<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
* {box-sizing: border-box;}
body{
  margin: 0;
  padding: 0;
  font-family: 'Roboto',sans-serif;

}
#wrapper{
  padding: 0 10px;
}
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
  background-color: #bd2424;
  color: white;
  padding: 12px 20px;
  margin-bottom: 5px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #ad1f1f;
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
.alert{
      padding: 10px 20px;
        height: 100%;
        margin:0px auto;
        z-index:0;
}
.alert-danger{
      background-color:#b00c04;
      color:#fff;
    }

</style>
</head>
<body>
  @if (session('status_error'))
<div class="alert alert-danger">
  {{session('status_error')}}
</div>
 @elseif (session('status'))
 @redirect()->back()->with('status', Task Have Been Removed Successfuly)
@endif
<div id="wrapper">
	<h1>Remove a Task</h1>
	<form method="POST" action="/itemraction">
 
        {{ csrf_field() }}
 
       <div>
          <label >Task Name</label>
          <input type="text" name="name2" placeholder="Task Name">
 
      </div>
      <div>
            <input type="submit" value="Remove It!">
      </div>
    </form>
    <form>
  <input class="back_btn" type="button" value="Back" onclick="history.back()">
</form>
 <p>Click on "Back" button multiple times to return back</p>
 </div>

</div>
</body>
</html>