<title>Update Product</title>
@extends('layouts.sidebar')
@section('sidebar')
<h1 style="color: red;" class="badge rounded-pill bg-warning">{{Session::get('msg')}}</h1>
<center>
<form action="" method="post">
{{@csrf_field()}}
	<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
		<tr>
			<td colspan="5">
				<h1 align="center">Update Products</h1>
			</td>
		</tr>
		<tr>
			<th>Image</th>
			<th>Product Category</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
		</tr>
		@foreach($pro as $p)
		<tr>
			<td><img width="100px" height="100px" src="products/{{$p->p_picture}}"></td>
			<td>{{$p->p_category}}</td>
			<td><a href="{{route('product_details_update',['id' => $p->id])}}">{{$p->p_name}}</a></td>
			<td align="Right">{{$p->p_price}}</td>
			<td align="Right">{{$p->p_quantity}}</td>
		</tr>
		@endforeach
		
	</table>
</form>
</center>
@endsection