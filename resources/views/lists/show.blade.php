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
	<h2>{{$list->name_of_list}}</h2>
	<ul>
		@foreach($items as $item)
		<li>{{$item->list_item}}</li>
		@endforeach
	</ul>

</body>
</html>