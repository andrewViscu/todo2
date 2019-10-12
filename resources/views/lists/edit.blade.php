@extends('layouts.app')

@section('content')
 
<div class="container">
 
    <form method="POST" action="edit">
 
        {{ csrf_field() }}
 
       <div>
          <label >Edit List Name</label>
          <input type="text"  class="form-control" name="name3" placeholder="New List Name">
      </div>
      <div>
            <input type="submit" class="btn btn-primary" value="Save List" style="margin-top: 5px;">
      </div>
    </form>
  <button class="btn btn-default" style="background-color: #777;display: block;margin: 5px 0" type="button">
  	<a href="/lists" style="color:#fff;">
  	Back
  </a>
</button>
 </div>
 @endsection