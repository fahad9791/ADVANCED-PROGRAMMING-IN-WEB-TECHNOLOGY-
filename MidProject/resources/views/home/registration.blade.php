
<title>Registration</title>
@extends('layouts.layout')
@section('content')
<center>
	<br>
	<h1 class="badge rounded-pill bg-danger">{{Session::get('reg')}}</h1>
<form action="{{route('registration.submit')}}" method="post">
{{@csrf_field()}}
	<table style="margin-top: 5%; border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
		<tr>
			<td colspan="2">
				<h1 align="center">Registration</h1>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" name="email" placeholder="Email" value="{{old('email')}}">
				@error('email')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name" placeholder="Name" value="{{old('name')}}">
				@error('name')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" placeholder="Password" value="">
				@error('password')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td>
				<input type="password" name="cpassword" placeholder="Confirm Password" value="">
				@error('cpassword')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>
				<input type="number" name="phone" placeholder="Phone Number" value="{{old('phone')}}">
				@error('phone')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
		<tr>
			<td>Shop Name</td>
			<td>
				<input type="text" name="sname" placeholder="Shop Name" value="{{old('sname')}}">
				@error('sname')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
		<tr>
			<td>Shop Address</td>
			<td>
				<textarea name="saddress" placeholder="Shop Address">{{old('saddress')}}</textarea>
				@error('saddress')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
	</table>	
	<hr>
	<input class="btn btn-success" type="submit" name="submit" value="Registration">
	<a class="btn btn-outline-info" href="{{route('login')}}">Login</a>

</form>
</center>
@endsection




