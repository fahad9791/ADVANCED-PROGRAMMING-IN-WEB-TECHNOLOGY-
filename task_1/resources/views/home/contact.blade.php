
	@extends('layouts.layout')
	@section('content')

	<h1 align="center">This is contact page</h1>
	<h3>Name: {{$con->name}}</h3>
	<h3>Position: {{$con->position}}</h3>
	<h3>Email: {{$con->email}}</h3>

	@endsection