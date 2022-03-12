<title>Delete Products</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('add_product_success')}}</h1>

	<center>
	<form action="{{route('product_details_delete.submit',['id'=>$pro->id])}}" method="post" enctype="multipart/form-data">
	{{@csrf_field()}}
		<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
			<tr>
				<td colspan="2">
					<h1 align="center">Delete Products </h1>
				</td>
			</tr>
			<tr>
				<td>Product Picture</td>
				<td>
					<img width="100px" height="100px" src="products/{{$pro->p_picture}}">
				</td>
			</tr>
			<tr>
				<td>Product Category</td>
				<td>
					{{$pro->p_category}}
				</td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td>
					{{$pro->p_name}}
				</td>

			</tr>
			<tr>
				<td>Product Price</td>
				<td>
					{{$pro->p_price}}
				</td>
			</tr>
			<tr>
				<td>Product Quantity</td>
				<td>
					{{$pro->p_quantity}}
				</td>
			</tr>
		</table>	
		<br>
		<input class="btn btn-success" type="submit" name="submit" value="Delete">
	</form>
	</center>

@endsection