@extends('layouts.app')
@section('content')
<h1 align="center">{{ $user->name }}'s friends</h1>
<hr>
@foreach($friends as $friend)
	
	<h4 align="center">{{ $friend->name }}</h4>
	<hr>

@endforeach
@endsection