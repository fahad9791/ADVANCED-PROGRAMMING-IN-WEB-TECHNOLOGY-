@extends('layouts.layout')
@section('content')

<form>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Description</td>
			<td colspan="2">Action</td>
		</tr>
		@foreach($products as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->name}}</td>
			<td>{{$p->price}}</td>
			<td>{{$p->qty}}</td>
			<td>{{$p->description}}</td>
			<td><a href="{{route('edit', ['id'=>encrypt(($p->id))])}}">Edit</a></td>
			<td><a href="{{route('delete', ['id'=>encrypt(($p->id))])}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</form>

@endsection