@extends('layouts.app')


@section('content')
<div class="container">
@if (session('status'))
<div class="alert alert-success" id="list_added">
	{{session('status')}}
	<button class="btn btn_default" style="background-color: #777;display: block;float: right;color:#fff;position: relative;" onclick="hide()" id="hide_btn">Hide</button>
</div>
@elseif(session('status_error'))
<div class="alert alert-danger" id="list_removed">
	{{session('status_error')}}
	<button class="btn btn_default" style="background-color: #eee;" onclick="document.getElementById('list_removed').style.display = 'none';document.getElementsByClassName('hide_btn').style.display = 'none'">Hide</button>
</div>
@endif
<div id="wrapper">
<h1>All Information About Lists</h1>
@if($my_lists->count() == 0)
<p class="mb-0">You have to create lists to get information about them!</p>
@endif
<ul  class="lists">
	@foreach ($my_lists as $list)
	<li> {{$list}}  </li>
	@endforeach
</ul>
<h1>Only Names Of Lists</h1>
@if($my_lists->count() == 0)
<p class="mb-0">You have no lists,</p>
<p class="mb-0">Go and create one!</p>
@endif
<ul class="lists">
	@foreach ($my_lists as $list)
	<li class="mb-2">
		<a href="/lists/id/{{$list->id}}">
			{{ $list->name_of_list}}
		</a>

		<form action="/lists/remove/{{$list->id}}" method="get">
			<input class="btn btn-danger btn-sm"  style="float:right;margin-right:5px;" type="submit" value="Delete">
		</form>

		<form action="/lists/{{$list->id}}/edit" method="get">
			<input class="btn btn-success btn-sm" style="float:right;margin-right: 5px;" type="submit" value="Edit">
		</form>

	</li>
	@endforeach
</ul>
<br>
<form action="/lists/create" method="get">
	<input class="btn btn-success" style="margin-bottom: 5px;" type="submit" value="Create New List">
</form>

<script>
function hide(argument) {
	document.getElementById('list_added').style.display = 'none';
	document.getElementsByClassName('hide_btn').style.display = 'none';
}

</script>
</div>
</div>
@endsection
