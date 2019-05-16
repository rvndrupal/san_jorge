<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Frase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frase', 'Frase:') !!}
    {!! Form::text('frase', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('bloque', 'Selecciona el bloque') !!}
    {!! Form::select('bloque' , ['Uno'=>'Uno','Dos'=>'Dos','Tres'=>'Tres','Cuatro'=>'Cuatro'],null,['class' => 'form-control']) !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('oraciones.index') !!}" class="btn btn-default">Cancel</a>
</div>
