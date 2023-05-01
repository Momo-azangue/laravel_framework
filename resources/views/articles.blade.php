@extends('layout.app')




@section('content')
<h1> bonjour on dit quoi bg</h1>
	
	@foreach($posts as $post)
		<h3> <a href="/"> {{ $post }} </a> </h3>
	@endforeach

@endsection 