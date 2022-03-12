<title>Change Password</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 style="color: red;" class="badge rounded-pill bg-warning">{{Session::get('change_password_fail')}}</h1>
<h1 class="badge rounded-pill bg-success">{{Session::get('change_password_success')}}</h1>

	<center>
	<form action="{{route('change_password.submit')}}" method="post">
	{{@csrf_field()}}
		<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
			<tr>
				<td colspan="2">
					<h1 align="center">Change Password </h1>
				</td>
			</tr>
			<tr>
				<td>Current Password</td>
				<td>
					<input type="password" name="password" placeholder="Password" value="">
					@error('password')
					<span style="color:red">{{$message}}</span>
					@enderror
				</td>
			</tr>
			<tr>
				<td>New Password</td>
				<td>
					<input type="password" name="npassword" placeholder="New Password" value="">
					@error('npassword')
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
		</table>	
		<br>
		<input class="btn btn-success" type="submit" name="submit" value="Change Password">
	</form>
	</center>

@endsection