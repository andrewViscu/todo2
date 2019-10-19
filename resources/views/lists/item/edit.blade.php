@extends('layouts.app')

@section('content')

<div class="container">
	@if($errors->any())
  <div class="alert alert-danger">
  	<ul class="mb-0">
  	@foreach($errors->all() as $error)
  	<li>{{$error}}</li>
  	@endforeach
  </ul>
  </div>
  @endif
	<form method="POST" action="/lists/id/{{$list}}/item/edit/{{$item}}">
 
        {{ csrf_field() }}
 
       <div>
          <label >Edit Task Name</label>
          
          <input type="text"  class="form-control" name="name3" placeholder="New Task Name" value="{{$items->list_item}}">
      </div>
      <div>
            <input type="submit" class="btn btn-primary" value="Save Task" style="margin-top: 5px;">
      </div>
    </form>
    <form action="/lists/id/{{$list}}" method="get">
  <input class="btn btn-default" style="background-color: #777;display: block;margin: 5px 0;color:#fff;" type="submit" value="Back">
</form>
</div>

 @endsection