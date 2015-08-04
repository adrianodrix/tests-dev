@extends('layouts.admin')
@section('content')
    {!!Form::open()!!}
        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <strong> Genero adicionado Corretamente.</strong>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        @include('genre.form.genre')
        {!!link_to('#', $title='Registrar', $attributes = ['id'=>'record', 'class'=>'btn btn-primary'], $secure = null)!!}
    {!!Form::close()!!}
@endsection

@section('scripts')
    {!!Html::script('js/script.js')!!}
@endsection
