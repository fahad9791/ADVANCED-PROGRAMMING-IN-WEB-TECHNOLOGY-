
@extends('layouts.layout')
@section('content')
<br>
<a href="{{route('view_profile')}}"><h6 align="Right" style="color: goldenrod; padding-right: 10px; ">{{session::get('name')}}</h6></a>
<table width="100%" style="margin-top: 5%; border-collapse: separate; border-spacing: 15px 50px; ">
	<tr>
		<td style="vertical-align: top;" rowspan="2" width="20%" height="200px">
			<a style="color: cyan; background-color: black;" type="button" class="btn btn-primary btn-lg btn-block" href="{{route('dashboard')}}">Dashboard</a>
			<br>

			<div class="dropdown">
			  	<button style="color: cyan; background-color: black;" type="button" class="btn btn-primary btn-lg btn-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Profile
			  	</button>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('view_profile')}}">View Profile</a>
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('edit_profile')}}">Edit Profile</a>
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('change_password')}}">Change Password</a>
			  	</div>
			</div>
			<br>

			<div class="dropdown">
			  	<button style="color: cyan; background-color: black;" type="button" class="btn btn-primary btn-lg btn-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Product
			  	</button>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('view_product')}}">View Products</a>
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('add_product')}}">Add Products</a>
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('update_product')}}">Update Products</a>
			    	<a style="display: block;" class="btn btn-outline-info" href="{{route('delete_product')}}">Delete Products</a>
			  	</div>
			</div>
			<br>

			<a style="color: cyan; background-color: black;" type="button" class="btn btn-primary btn-lg btn-block" href="{{route('sells')}}">Sells</a>
			<br>

		</td>
	</tr>
	<tr>
		<td align="center" style="vertical-align: top;">
			@yield('sidebar')
		</td>
	</tr>
</table>

@endsection