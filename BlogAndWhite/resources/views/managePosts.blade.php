@extends('layouts.template')

@section('title', 'Manage Accounts')

@section('content')

	<div class="page-header text-center"><h1>Blogs</h1></div>
	<div class=" container col col-sm-8 ">
		<table class="table table-bordered table-hover">
			<thead>
			    <tr>
			      <th scope="col">Title</th>
			      <th scope="col">Author</th>
			      <th scope="col">Date Published</th>
			      <th scope="col">Post</th>
			    </tr>
	  		</thead>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td> {{ $post->username}} </td>
					<td>{{ $post->date_published }}</td>
					<td> {{ $post->status}} (button) </td>
				</tr>
			@endforeach
		</table>
	</div>
@stop