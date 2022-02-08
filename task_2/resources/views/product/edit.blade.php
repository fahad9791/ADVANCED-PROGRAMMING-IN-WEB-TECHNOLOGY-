@extends('layouts.layout')
@section('content')
<form action="{{route('edit.submit', ['id'=>encrypt(($product->id))])}}" method="post">
	{{@csrf_field()}}

	<input type="text" name="name" placeholder="Product Name" value="{{$product->name}}">
	@error('name')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="text" name="price" placeholder="Product Price" value="{{$product->price}}">
	@error('price')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="text" name="qty" placeholder="Product Quantity" value="{{$product->qty}}">
	@error('qty')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="text" name="description" placeholder="Product Description" value="{{$product->description}}">
	@error('description')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="submit" value="Edit" name="Submit">

</form>
@endsection