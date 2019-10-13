@extends('layouts.app')

@section('content')

<div class="container">
 
    <form method="POST" action="/lists/create">
 
        {{ csrf_field() }}
 
       <div>
          <label >List Name</label>
          <input type="text" class="form-control" name="name" placeholder="List Name">
 
      </div>
      <div>
            <input type="submit" class="btn btn-primary"  value="Make List" style="margin-top: 10px;">
      </div>
    </form>
    <form action="/lists" method="get">
     <input class="btn btn-default" style="background-color: #777;display: block;margin: 5px 0;color:#fff;" type="submit" value="Back">
  </form>
 </div>
 
@endsection