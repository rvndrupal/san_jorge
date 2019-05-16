<table class="table table-responsive" id="comunidades-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
        <th>Link</th>
        <th>Imagen</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comunidades as $comunidade)
        <tr>
            <td>{!! $comunidade->titulo !!}</td>
            <td>{!! $comunidade->descripcion !!}</td>
            <td>{!! $comunidade->link !!}</td>
            <td><img src="{{ $comunidade->imagen }}" alt="{{ $comunidade->titulo }}" style="width: 100px;"></td>
            <td>
                {!! Form::open(['route' => ['comunidades.destroy', $comunidade->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comunidades.show', [$comunidade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comunidades.edit', [$comunidade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
