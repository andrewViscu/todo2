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
		<li style="@if ($item->done)text-decoration:line-through;@endif " >
			{{$item->list_item}}
			
			<button class="btn btn-danger btn-sm" style="float:right; margin-left: 5px;">
				<a href="/lists/id/{{$lists->id}}/item/remove/{{$item->id}}" style="color:#fff;">
					Delete
				</a>
			</button>
			<button class="btn btn-success btn-sm" style="float:right; margin-left: 5px;">
				<a href="/lists/id/{{$lists->id}}/item/edit/{{$item->id}}" style="color:#fff;">
					Edit
				</a>
			</button>
				
		</li>
		@endforeach
	</ul>
	<br>
	<button class="btn btn-success" style="display: block;margin: 5px 0;"><a href="/lists/id/{{$lists->id}}/item/create" style="color: white;">Create New Task</a></button>
	
  <button class="btn bnt-default" type="button" style="background-color: #777;display: block;margin: 5px 0" >
  	<a href="/lists" style="color:#fff;">
  	Back
  </a>
</button>
</div>

@endsection