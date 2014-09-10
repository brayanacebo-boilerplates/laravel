@extends('layout')

@section('content')

<div class="page-header">
	<h2>{{ $category->name }}</h2>
</div>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Descripción</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($category->candidates as $candidate)
		<tr>
			<td>{{ $candidate->user->full_name }}</td>
			<td>{{ $candidate->job_type }}</td>
			<td>{{ $candidate->description }}</td>
			<td width="50">
				<a href="#">Ver</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop
