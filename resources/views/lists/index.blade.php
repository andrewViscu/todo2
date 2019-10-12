@extends('layouts.app')


@section('content')
<div class="container">
@if (session('status'))
<div class="alert alert-success" id="list_added">
	{{session('status')}}
	<button class="btn btn-default" onclick="document.getElementById('list_added').style.display = 'none';document.getElementsByClassName('hide_btn').style.display = 'none'">Hide</button>
</div>
@elseif(session('status_error'))
<div class="alert alert-danger" id="list_removed">
	{{session('status_error')}}
	<button class="btn btn_default" style="background-color: #eee;" onclick="document.getElementById('list_removed').style.display = 'none';document.getElementsByClassName('hide_btn').style.display = 'none'">Hide</button>
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
<li><a href="/lists/id/{{$list->id}}">{{ $list->name_of_list}}</a><button class="btn btn-danger" style="float:right;margin-right:5px;"><a href="/lists/remove/{{$list->id}}/" style="color:#fff;">Delete</a></button><button class="btn btn-success" style="float:right;margin-right: 5px;"><a href="/lists/{{$list->id}}/edit" style="color:#fff;" >Edit</a></button></li>
@endforeach
</ul>
<br>
<button class="btn btn-success" style="margin-bottom: 5px;" ><a href="/lists/create" style="text-decoration: none;color: white;">Create New List</a></button>


</div>
</div>
@endsection
