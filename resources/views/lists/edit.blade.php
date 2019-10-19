@extends('layouts.app')

@section('content')
 
<div class="container">
  @if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </div>
  @endif
 
    <form method="POST" action="edit">
 
        {{ csrf_field() }}
 
       <div>
        
          <label >Edit List Name</label>
          <input type="text"  class="form-control" name="name3" placeholder="New List Name" value="{{$lists->name_of_list}}">
      </div>
      <div>
            <input type="submit" class="btn btn-primary" value="Save List" style="margin-top: 5px;">
      </div>
    </form>
    <form action="/lists">
  <input class="btn btn-default" style="background-color: #777;display: block;margin: 5px 0; color:#fff;" type="submit" value="Back">
</form>
 </div>
 @endsection