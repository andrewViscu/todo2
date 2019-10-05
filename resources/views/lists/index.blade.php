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
		ul{
			list-style-type:decimal; 
		}
		.alert{
			padding: 10px 15px;
  			height: 100%;
  			margin:0px auto;
  			z-index:0;
 		}
 		a{
			text-decoration: none;
			color:#000;}
 		.alert-success{
 			background-color:#68bf52;
 			color:#fff;
 		}
 		.alert-danger{
 			background-color:#b00c04;
 			color:#fff;
 		}
 		.lists{
 			background-color: #ededed;
 			list-style-position:inside; 
 			padding: 0;
 			  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
 		}
 		.lists li:hover{
 			background-color: #d4d2d2;
 		}
 		.lists li{
 			padding:10px;
 			border:1px solid #bfbfbf;
 			margin-top: -1px;
 			margin-left: -1px;
 		}
 		.hide_btn{
 			position: relative;
 			float:right;
 			background-color: #595959;
			color: white;
			margin-top: -5px;
			padding: 6px 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-bottom: 5px;
 		}
 		.del_edit{
 			position: relative;
 			float: right;
 			padding: 5px 10px;
 			color:#fff;
 			border: none;
 			border-radius: 4px;
 			cursor: pointer;
 			margin-top: -3px;
 			margin-left: 10px;
 		}
 		.del_edit a{
 			text-decoration: none;
 			color: white;
 		}
	</style>

@if (session('status'))
<div class="alert alert-success" id="list_added">
	{{session('status')}}
	<button class="hide_btn" onclick="document.getElementById('list_added').style.display = 'none';document.getElementsByClassName('hide_btn').style.display = 'none'">Hide</button>
</div>
@elseif(session('status2'))
<div class="alert alert-danger" id="list_removed">
	{{session('status2')}}
	<button class="hide_btn" onclick="document.getElementById('list_removed').style.display = 'none';document.getElementsByClassName('hide_btn').style.display = 'none'">Hide</button>
</div>
@endif
<div id="wrapper">
<h1>All Information About Lists</h1>
<ul  class="lists">
@foreach ($my_lists as $list)
<li> {{ $list}}  </li>
@endforeach
</ul>
<h1>Only Names Of Lists</h1>
<ul class="lists">
@foreach ($my_lists as $list)
<li><a href="/lists/id/{{$list->id}}">{{ $list->name_of_list}}</a><button class="del_edit alert-danger"><a href="/lists/remove/{{$list->id}}/">Delete</a></button><button class="del_edit alert-success"><a href="/lists/{{$list->id}}/edit" >Edit</a></button></li>
@endforeach
</ul>
<br>
<button style="background-color: #45a049;padding: 10px 15px;color:#fff;margin-bottom: 5px; border: none;border-radius: 4px;cursor: pointer;" ><a href="/lists/create" style="text-decoration: none;color: white;">Create New List</a></button>


</div>
</body>
</html> 