<title>View Profile</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('update_profile')}}</h1>
<h1 class="badge rounded-pill bg-success">{{Session::get('change_picture')}}</h1>

	<center>
		<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 15px 35px; border-width: 5px;">
			<tr>
				<td colspan="3">
					<h1 align="center">View Profile</h1>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					{{session::get('email')}}
				</td>
				<td align="center" valign="top" rowspan="4">
					<img width="150px" height="150px" src="img/{{session::get('picture')}}">
					<br>
					<br>
					<a class="btn btn-outline-warning" href="{{route('change_picture')}}">Change Profile Picture</a>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					{{session::get('name')}}
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>
					{{session::get('phone')}}
				</td>
			</tr>
			<tr>
				<td>Shop Name</td>
				<td>
					{{session::get('shop_name')}}
				</td>
			</tr>
			<tr>
				<td>Shop Address</td>
				<td>
					{{session::get('shop_address')}}
				</td>
			</tr>
		</table>
	</center>
		
@endsection