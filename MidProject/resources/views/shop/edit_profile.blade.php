<title>Edit Profile</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('msg')}}</h1>

	<center>
	<form action="{{route('edit.submit')}}" method="post">
	{{@csrf_field()}}
		<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 60px 35px; border-width: 5px;">
			<tr>
				<td colspan="2">
					<h1 align="center">Edit Profile</h1>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					{{session::get('email')}}
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" placeholder="Name" value="{{session::get('name')}}">
					@error('name')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>
					<input type="number" name="phone" placeholder="Phone Number" value="{{session::get('phone')}}">
					@error('phone')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Shop Name</td>
				<td>
					<input type="text" name="sname" placeholder="Shop Name" value="{{session::get('shop_name')}}">
					@error('sname')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>Shop Address</td>
				<td>
					<textarea name="saddress" placeholder="Shop Address">{{session::get('shop_address')}}</textarea>
					@error('saddress')
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