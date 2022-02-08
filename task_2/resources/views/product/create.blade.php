@extends('layouts.layout')
@section('content')
<form action="{{route('create.submit')}}" method="post">
	{{@csrf_field()}}

	<input type="text" name="name" placeholder="Product Name" value="{{old('name')}}">
	@error('name')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="text" name="price" placeholder="Product Price" value="{{old('price')}}">
	@error('price')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="text" name="qty" placeholder="Product Quantity" value="{{old('qty')}}">
	@error('qty')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="text" name="description" placeholder="Product Description" value="{{old('description')}}">
	@error('description')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<input type="submit" name="Submit">

</form>



@endsection