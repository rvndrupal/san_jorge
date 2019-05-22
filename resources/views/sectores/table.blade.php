<table class="table table-responsive" id="sectores-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sectores as $sectore)
        <tr>
            <td>{!! $sectore->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['sectores.destroy', $sectore->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sectores.show', [$sectore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sectores.edit', [$sectore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>