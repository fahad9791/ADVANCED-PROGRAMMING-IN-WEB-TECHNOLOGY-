@extends('layouts.layout')
@section('content')

<form action="{{route('delete.submit', ['id'=>encrypt(($product->id))])}}" method="post">
	{{@csrf_field()}}

	<h1>Product</h1>
	<h3>Product Name:	{{$product->name}}</h3>
	<h3>Product Price:	{{$product->price}}</h3>
	<h3>Product Quantity:	{{$product->qty}}</h3>
	<h3>Product Description:	{{$product->description}}</h3>
	<br>
	<input type="submit" value="Delete" name="Submit">

</form>

@endsection