@extends('layouts.app')

@section('content')

<div class="container" style="position: absolute;left: 50%; top: 45%; margin-left: auto; margin-right: auto;transform: translate(-50%,-50%); ">
	
	<h1 style="text-align:center;">
		Page 		
			<kbd>@if ($url_len > 50){{$url = $trimmed_url}}@else{{$url}}@endif</kbd>
		not found
	</h1>
</div>

@endsection