<title>Dashboard</title>
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 class="badge rounded-pill bg-success">{{Session::get('login')}}</h1>
<h1 class="badge rounded-pill bg-success">{{Session::get('delete_success')}}</h1>

			<h6>{{session::get('name')}}</h6>
			<h4>Dashboard</h4>

@endsection