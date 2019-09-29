<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<title>Main</title>
</head>
<body>
	<style>
		h1{font-family: 'Be Vietnam', sans-serif;
			font-size: 20px;
		}
		li,a{
			font-family: 'Roboto',sans-serif;
		}
		ul{
			list-style-type:decimal;
		}
	</style>

<body>
	<h2>{{$lists->name_of_list}}</h2>
	<ul>
		@foreach($lists->items as $item)
		<li>{{$item->list_item}}</li>
		@endforeach
	</ul>
	<br>
	<button style="background-color: #45a049;padding: 10px 15px"><a href="/lists/item/create" style="text-decoration: none;color: white;">Create New Task</a></button>
	<br>
	<button style="background-color: #bd2424;padding: 10px 15px"><a href="/lists/item/remove" style="text-decoration: none;color: white;">Remove Task</a></button>

</body>
</html>
