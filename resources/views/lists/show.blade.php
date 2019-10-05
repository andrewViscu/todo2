<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<title>Main</title>
</head>
<body>
	<style>
	body{font-family: 'Roboto',sans-serif;}
		h1{font-family: 'Be Vietnam', sans-serif;
			font-size: 20px;
		}
		li,a{
			
		}
		ul{
			list-style-type:decimal;
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

	</style>

<body>

	<h2>{{$lists->name_of_list}}</h2>
	<ul>
		@foreach($lists->items as $item)
		<li>{{$item->list_item}} <a href="/lists/id/{{$lists->id}}/item/remove/{{$item->id}}">Delete</a></li>
		@endforeach
	</ul>
	<br>
	<button style="background-color: #45a049;padding: 10px 15px; border: none;border-radius: 4px;cursor: pointer;margin-bottom: 5px;"><a href="/lists/id/{{$lists->id}}/item/create" style="text-decoration: none;color: white;">Create New Task</a></button>
 <form>
  <input class="back_btn" type="button" value="Back" onclick="history.back()">
</form>

</body>
</html>
