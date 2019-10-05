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
		li{
			margin-bottom: 2px;
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
.alert-danger{
	background-color:#b00c04;
 	color:#fff;
}
.alert-success{
	background-color:#68bf52;
 	color:#fff;
}
.del_edit{
 			position: relative;
 			float: right;
 			padding: 2px 4px;
 			color:#fff;
 			border: none;
 			border-radius: 4px;
 			cursor: pointer;
 			margin-top: -3px;
 			margin-left: 10px;
 			margin-bottom: 2px;
 		}
 		.del_edit a{
 			text-decoration: none;
 			color: white;

 		}
 		.cross-out{
 			text-decoration: line-through;
 		}

	</style>

<body>

	<h2>{{$lists->name_of_list}}</h2>
	<ul>
		@foreach($lists->items as $item)
		<li class="@if ($item->done)cross-out @endif">{{$item->list_item}} <button class="del_edit alert-danger"><a href="/lists/id/{{$lists->id}}/item/remove/{{$item->id}}">Delete</a></button><button class="del_edit alert-success"><a href="/lists/id/{{$lists->id}}/item/done/{{$item->id}}" >Mark as finished</a></button></li>
		@endforeach
	</ul>
	<br>
	<button style="background-color: #45a049;padding: 10px 15px; border: none;border-radius: 4px;cursor: pointer;margin-bottom: 5px;"><a href="/lists/id/{{$lists->id}}/item/create" style="text-decoration: none;color: white;">Create New Task</a></button>
 <form>
  <input class="back_btn" type="button" value="Back" onclick="history.back()">
</form>

</body>
</html>
