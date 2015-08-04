@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		{!!Form::model($user,['route'=> ['user.update',$user->id],'method'=>'PUT'])!!}
			@include('user.forms.usr')
			{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	@endsection