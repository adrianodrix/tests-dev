@extends('layouts.admin')
@include('alerts.success')
@section('content')
	<table class="table">
		<thead>
			<th>Nome</th>
			<th>Email</th>
			<th>Acao</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
			{!!link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary btn-block'])!!}
			{!!Form::open(['route'=> ['user.destroy',$user->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Excluir',['class'=>'btn btn-danger btn-block'])!!}
			{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach
	</table>
	{!! $users->render() !!}
@endsection