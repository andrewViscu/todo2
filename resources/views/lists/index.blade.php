<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<title>Main</title>
</head>
<body>
	<style>
		body{
			padding:0;
			margin: 0;
		}
		#wrapper{
			padding: 0 10px;
		}
		h1{font-family: 'Be Vietnam', sans-serif;
			font-size: 20px;
		}
		li,a,div{
			font-family: 'Roboto',sans-serif;
		}
		a{
			text-decoration: none;
			color:#00397a;
		}
		a:hover{
			color:#0668d6;
		}
		ul{
			list-style-type:decimal; 
		}
		.alert{
			padding: 10px 15px;
  			height: 100%;
  			margin:0px auto;
  			z-index:0;
 		}
 		.alert-success{
 			background-color:#68bf52;
 			color:#fff;
 		}
 		.alert-danger{
 			background-color:#b00c04;
 			color:#fff;
 		}
	</style>

@if (session('status'))
<div class="alert alert-success">
	{{session('status')}}
</div>
@elseif(session('status2'))
<div class="alert alert-danger">
	{{session('status2')}}
</div>
@endif
<div id="wrapper">
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
<button style="background-color: #45a049;padding: 10px 15px;color:#fff;margin-bottom: 5px; border: none;border-radius: 4px;cursor: pointer;" ><a href="/lists/create" style="text-decoration: none;color: white;">Create New List</a></button>

<button style="background-color: #bd2424;padding: 10px 15px;color:#fff; border: none;margin-bottom: 5px;border-radius: 4px;cursor: pointer;" value="Remove List"><a href="/lists/remove" style="text-decoration: none;color: white;">Remove List</a></button>

</div>
</body>
</html> 