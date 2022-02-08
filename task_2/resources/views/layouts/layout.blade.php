<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
</head>
<body>
	<div>
		<a href="{{route('view')}}">View</a>
		<a href="{{route('create')}}">Create</a>
	</div>
	<br>

	@yield('content')

	<div>
		<br>
		Copy Right © AIUB 2022
	</div>

</body>
</html>