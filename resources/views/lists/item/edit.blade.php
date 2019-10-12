@extends('layouts.app')

@section('content')

<div class="container">
	<form method="POST" action="/lists/id/{{$list}}/item/edit/{{$item}}">
 
        {{ csrf_field() }}
 
       <div>
          <label >Edit Task Name</label>
          <input type="text"  class="form-control" name="name3" placeholder="New Task Name">
      </div>
      <div>
            <input type="submit" class="btn btn-primary" value="Save Task" style="margin-top: 5px;">
      </div>
    </form>
  <button class="btn btn-default" style="background-color: #777;display: block;margin: 5px 0" type="button">
  	<a href="/lists/id/{{$list}}" style="color:#fff;">
  	Back
  </a>
</button>
</div>

 @endsection