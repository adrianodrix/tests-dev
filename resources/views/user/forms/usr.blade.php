<div class="form-group">
	{!!Form::label('name','Nome:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Informe seu nome de usuario'])!!}
</div>
<div class="form-group">
	{!!Form::label('email','Email:')!!}
	{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Informe seu email'])!!}
</div>
<div class="form-group">
	{!!Form::label('password','Senha:')!!}
	{!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Informe sua senha'])!!}
</div>