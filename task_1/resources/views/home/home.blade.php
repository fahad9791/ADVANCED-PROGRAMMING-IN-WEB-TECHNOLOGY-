
	@extends('layouts.layout')
	@section('content')

	<table>
		<tr>
			<td align="center" colspan="4"><h1>This is Home Page</h1></td>
		</tr>
		<tr height = "250px">
			<td width="500px">
				<h3>Course: {{$course1->course}}</h3>
				<h3>Instructor: {{$course1->instructor}}</h3>
				<h3>Duration: {{$course1->duration}}</h3>
				<h3>Starts: {{$course1->starts}}</h3>
			</td>
			<td width="500px">
				<h3>Course: {{$course1->course}}</h3>
				<h3>Instructor: {{$course1->instructor}}</h3>
				<h3>Duration: {{$course1->duration}}</h3>
				<h3>Starts: {{$course1->starts}}</h3>
			</td>
			<td width="500px%">
				<h3>Course: {{$course1->course}}</h3>
				<h3>Instructor: {{$course1->instructor}}</h3>
				<h3>Duration: {{$course1->duration}}</h3>
				<h3>Starts: {{$course1->starts}}</h3>
			</td>
			<td width="500px%">
				<h3>Course: {{$course1->course}}</h3>
				<h3>Instructor: {{$course1->instructor}}</h3>
				<h3>Duration: {{$course1->duration}}</h3>
				<h3>Starts: {{$course1->starts}}</h3>
			</td>
		</tr>
	</table>

	

	@endsection