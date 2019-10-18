@extends('layouts.app')

@section('content')

<div class="container">

  
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @elseif(session('status'))
    <div class=" alert alert-danger">
      <p>{{session('status')}}</p>
    </div>
  @endif
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