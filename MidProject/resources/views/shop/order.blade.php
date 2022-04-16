
@extends('layouts.sidebar')
@section('sidebar')
<br>
<h1 style="color: red;" class="badge rounded-pill bg-warning">{{Session::get('msg')}}</h1>

			<h6>{{session::get('name')}}</h6>

@endsection