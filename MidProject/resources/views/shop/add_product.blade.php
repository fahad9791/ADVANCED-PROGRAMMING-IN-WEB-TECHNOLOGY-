<title>ADD Products</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('add_product_success')}}</h1>

	<center>
	<form action="{{route('add_product.submit')}}" method="post" enctype="multipart/form-data">
	{{@csrf_field()}}
		<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
			<tr>
				<td colspan="2">
					<h1 align="center">Add Products </h1>
				</td>
			</tr>
			<tr>
				<td>Product Category</td>
				<td>
					<select style="color: black;" name="p_category">
						<option></option>
						<option>Fruits & Vegetables</option>
						<option>Meat & Fish</option>
						<option>Cooking</option>
						<option>Baking</option>
						<option>Dairy</option>
						<option>Frozen & Canned</option>
						<option>Bread & Bakery</option>
						<option>Breakfast</option>
						<option>Snacks</option>
						<option>Beverages</option>
						<option>Diabetic Food</option>
					</select>
					@error('p_category')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td>
					<input type="text" name="p_name" placeholder="Product Name" value="{{old('p_name')}}">
					@error('p_name')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>

			</tr>
			<tr>
				<td>Product Price</td>
				<td>
					<input type="text" name="p_price" placeholder="Product Price" value="{{old('p_price')}}">
					@error('p_price')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Product Quantity</td>
				<td>
					<input type="text" name="p_quantity" placeholder="Product Quantity" value="{{old('p_quantity')}}">
					@error('p_quantity')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Product Picture</td>
				<td>
					<input style="border-style: solid; border-color: coral; border-width: thin; color: white;" type="file" name="p_picture" placeholder="Product Picture">
					@error('p_picture')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>

			
			
			
		</table>	
		<br>
		<input class="btn btn-success" type="submit" name="submit" value="Add Product ">
	</form>
	</center>

@endsection