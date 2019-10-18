@extends('layouts.app')

@section('content')

<div class="container">
 
    <form method="POST" action="/lists/id/{{$list}}/item/create">
  @if(session('status'))
    <div class=" alert alert-danger">
      <p>{{session('status')}}</p>
    </div>
  @endif
        {{ csrf_field() }}
 
       <div>
          <label >Task Name</label>
          <input type="text" name="name3" class="form-control" placeholder="Task Name">
      </div>
      <div>
            <input type="submit" class="btn btn-success"  value="Add Task" style="margin-top: 5px;">
      </div>
    </form>
    <form action="/lists/id/{{$list}}" method="get">
     <input class="btn btn-default" style="background-color: #777;display: block;margin: 5px 0;color:#fff;" type="submit" value="Back">
    </form>
 </div>
 
@endsection