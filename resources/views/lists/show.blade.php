@extends('layouts.app')

@section('content')
<div class="container">
	<script src="https://kit.fontawesome.com/683217a290.js" crossorigin="anonymous"></script>
	@if(session('status_error'))
	<p class="alert alert-danger">{{session('status_error')}}</p>
	@elseif(session('status_update'))
	<p class="alert alert-success">{{session('status_update')}}</p>
	@endif
	<h2>{{$lists->name_of_list}}</h2>
	<ul style="list-style-type: decimal;list-style-position: inside;">
		@foreach($lists->items as $item)
		<a href="/lists/id/{{$lists->id}}/item/done/{{$item->id}}" style="float:left;color:#000; margin-right: 5px;">
			@if (!$item->done)<i class="far fa-check-square"></i> @else <i class="fas fa-check-square"></i> @endif
		</a>
		<li class="mb-2" style="@if ($item->done)text-decoration:line-through;@endif " >
			{{$item->list_item}}

			<form action="/lists/id/{{$lists->id}}/item/remove/{{$item->id}}" method="get">
				<input class="btn btn-danger btn-sm" style="float:right; margin-left: 5px;" type="submit" value="Delete"> 
			</form>
			<form action="/lists/id/{{$lists->id}}/item/edit/{{$item->id}}" method="get">
				<input class="btn btn-success btn-sm" style="float:right; margin-left: 5px;" type="submit" value="Edit">
			</form>
				
		</li>
		@endforeach
	</ul>
	<br>
	<form action="/lists/id/{{$lists->id}}/item/create">
		<input class="btn btn-success" style="display: block;margin: 5px 0;" type="submit" value="Create New Task">
	</form>
	<form action="/lists" method="get">
		<input class="btn" style="background-color: #777;display: block;margin: 5px 0;color:#fff;:hover{background-color: #666;}" type="submit" value="Back">
	</form>
</div>

@endsection