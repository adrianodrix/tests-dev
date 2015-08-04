@extends('layouts.admin')
@section('content')
    @include('genre.form.modal')
    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong> Genero Atualizado Corretamente.</strong>
    </div>
    <table class="table">
        <thead>
        <th>Nome</th>
        <th>Ação</th>
        </thead>
        <tbody id="datos"></tbody>
    </table>
@endsection

@section('scripts')
    {!!Html::script('js/script2.js')!!}
@endsection
