
<title>Login</title>
@extends('layouts.layout')
@section('content')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('reg')}}</h1>
<h1 class="badge rounded-pill bg-danger">{{Session::get('invalid')}}</h1>
<center>
<form action="{{route('login.submit')}}" method="post">
{{@csrf_field()}}
	<table style="margin-top: 5%; border-collapse: separate; border-spacing: 15px 50px; border-style: solid; border-color: cyan; border-width: 5px;">
		<tr>
			<td colspan="2">
				<h1 align="center">Login</h1>
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
			<td>Password</td>
			<td>
				<br>
				<input type="password" name="password" placeholder="Password" value="">
				@error('password')
				<span style="color:red">{{$message}}</span>
				@enderror
			</td>
		</tr>
	</table>	
	<hr>
	<input class="btn btn-info" type="submit" name="submit" value="Login">
	<a class="btn btn-outline-success" href="{{route('registration')}}">Registration</a>

</form>
</center>
@endsection