@extends('layouts.app')

@section('content')

<div class="container" >
	<div style="position: absolute;left: 50%;transform: translate(-50%,0);">
	<img src="{{ asset('death_404.png') }}">
</div>
	<div style="position: absolute;left: 50%; top: 65%; margin-left: auto; margin-right: auto;transform: translate(-50%,-50%); ">
		<h1 style="text-align:center;">
			Page 		
				<kbd>@if ($url_len > 50){{$url = $trimmed_url}}@else{{$url}}@endif</kbd>
			not found
		</h1>

	</div>
	<div style="position: absolute;left: 50%; top: 77%; margin-left: auto; margin-right: auto;transform: translate(-50%,-50%);">
		<samp style="text-align: center;">(ERR_404_NOT_FOUND)</samp>
	</div>
</div>
@endsection