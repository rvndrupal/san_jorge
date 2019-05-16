<table class="table table-responsive" id="bloqueunos-table">
    <thead>
        <tr>
            <th>Direccion</th>
        <th>Email</th>
        <th>Telefono</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bloqueunos as $bloqueuno)
        <tr>
            <td>{!! $bloqueuno->direccion !!}</td>
            <td>{!! $bloqueuno->email !!}</td>
            <td>{!! $bloqueuno->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['bloqueunos.destroy', $bloqueuno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bloqueunos.show', [$bloqueuno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bloqueunos.edit', [$bloqueuno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
