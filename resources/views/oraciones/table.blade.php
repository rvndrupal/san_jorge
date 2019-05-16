<table class="table table-responsive" id="oraciones-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Frase</th>
        <th>Bloque</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($oraciones as $oracione)
        <tr>
            <td>{!! $oracione->titulo !!}</td>
            <td>{!! $oracione->frase !!}</td>
            <td>{!! $oracione->bloque !!}</td>
            <td>
                {!! Form::open(['route' => ['oraciones.destroy', $oracione->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('oraciones.show', [$oracione->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('oraciones.edit', [$oracione->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>