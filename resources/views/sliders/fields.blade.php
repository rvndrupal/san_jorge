
<!-- Sli Textouno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sli_textouno', 'Textouno:') !!}
    {!! Form::text('sli_textouno', null, ['class' => 'form-control']) !!}
</div>

<!-- Sli Textodos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sli_textodos', 'Textodos:') !!}
    {!! Form::text('sli_textodos', null, ['class' => 'form-control']) !!}
</div>

<!-- Sli Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sli_imagen', 'Imagen:') !!}
    {!! Form::file('sli_imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sliders.index') !!}" class="btn btn-default">Cancel</a>
</div>
