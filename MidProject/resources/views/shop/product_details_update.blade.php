<title>Update Products</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('add_product_success')}}</h1>

	<center>
	<form action="{{route('product_details_update.submit',['id'=>$pro->id])}}" method="post" enctype="multipart/form-data">
	{{@csrf_field()}}
		<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
			<tr>
				<td colspan="2">
					<h1 align="center">Update Products </h1>
				</td>
			</tr>
			<tr>
				<td>Product Category</td>
				<td>
					<select style="color: black;" name="p_category">
						<option>{{$pro->p_category}}</option>
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
					<input type="text" name="p_name" placeholder="Product Name" value="{{$pro->p_name}}">
					@error('p_name')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>

			</tr>
			<tr>
				<td>Product Price</td>
				<td>
					<input type="text" name="p_price" placeholder="Product Price" value="{{$pro->p_price}}">
					@error('p_price')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Product Quantity</td>
				<td>
					<input type="text" name="p_quantity" placeholder="Product Quantity" value="{{$pro->p_quantity}}">
					@error('p_quantity')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Product Picture</td>
				<td>
					<img width="100px" height="100px" src="products/{{$pro->p_picture}}">
					<input style="border-style: solid; border-color: coral; border-width: thin; color: white;" type="file" name="p_picture" placeholder="Product Picture">
					@error('p_picture')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>

			
			
			
		</table>	
		<br>
		<input class="btn btn-success" type="submit" name="submit" value="Update">
	</form>
	</center>

@endsection