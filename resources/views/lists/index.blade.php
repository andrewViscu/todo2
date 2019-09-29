<!DOCTYPE html>
<html>
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
 
<h1>All Information About Lists</h1>
<ul>
@foreach ($my_lists as $list)
<li> {{ $list}}  </li>
@endforeach
</ul>
<h1>Only Names Of Lists</h1>
<ul>
@foreach ($my_lists as $list)
<li><a href="/lists/id/{{$list->id}}">{{ $list->name_of_list}}</a></li>
@endforeach
</ul>
<br>
<button style="background-color: #45a049;padding: 10px 15px"><a href="/lists/create" style="text-decoration: none;color: white;">Create New List</a></button>
<br>
<button style="background-color: #bd2424;padding: 10px 15px"><a href="/lists/remove" style="text-decoration: none;color: white;">Remove List</a></button>
 
</body>
</html> 