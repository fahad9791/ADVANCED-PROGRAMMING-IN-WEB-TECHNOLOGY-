<title>Change Profile Picture</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('msg')}}</h1>

	<center>
		<form action="{{route('change_picture.submit')}}" method="post" enctype="multipart/form-data">
			{{@csrf_field()}}
			<table style="border-style: solid; border-color:Aquamarine; border-collapse: separate; border-spacing: 105px 35px; border-width: 5px;">
				<tr>
					<td>
						<img width="150px" height="150px" src="img/{{session::get('picture')}}">
					</td>
				</tr>
				<tr>
					<td>
						<input type="file" name="pro_pic" style="border-style: solid; border-color: coral; border-width: thin; color: white;">
						@error('pro_pic')
						<span style="color:red">{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-success" type="submit" name="submit" value="Upload">
					</td>
				</tr>
			</table>
		</form>
	</center>

@endsection