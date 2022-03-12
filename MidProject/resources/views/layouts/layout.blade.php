<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		input, textarea{
  			color: black;
  		}
  	</style>
</head>
<body style="background-color: black; color: white;"> 
	<center>
	<div align="Right">
		<!-- @if(!Session::get('id'))
		<a class="btn btn-primary" href="{{route('login')}}">Login</a>
		<a class="btn btn-secondary" href="{{route('registration')}}">Register</a>
		@endif -->
		@if(Session::get('id'))
		<a style="margin-right: 10px; margin-top: 10px" class="btn btn-danger" href="{{route('logout')}}">Logout</a>
		@endif
	</div>

	@yield('content')

	<div>
		Copy Right © AIUB 2022
	</div>
	</center>

</body>
</html>