@extends('layouts.template')
@section('title', 'Manage Accounts')

@section('content')

	<div class="page-header text-center"><h1>Accounts</h1></div>
	<div class=" container col col-sm-8 ">
		<table class="table table-bordered table-hover">
			<thead>
		    	<tr>
			      <th scope="col">Username</th>
			      <th scope="col">Date Joined</th>
			      <th scope="col">Account</th>
			    </tr>
  			</thead>
			@foreach ($accounts as $account)
				<tr>
					<td>{{ $account->username }}</td>
					<td> {{ $account->date_registered }} </td>
						<form action="#" method="get">
							<input type="hidden" name="accId" value="{!! $account->acc_id !!}">
							@if ($account->status == '0')
								<td> <input class="btn btn-outline-dark" type="submit" name="enable" value="publish"> </td>
							@else
								<td> <input class="btn btn-outline-danger" type="submit" name="disable" value="unpublish" formaction="#"> </td>
							@endif
						</form>
				</tr>
			@endforeach
		</table>
	</div>
@stop