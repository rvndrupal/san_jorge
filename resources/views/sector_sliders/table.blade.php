<table class="table table-responsive" id="sectorSliders-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
        <th>Imagen</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sectorSliders as $sectorSlider)
        <tr>
            <td>{!! $sectorSlider->titulo !!}</td>
            <td>{!! $sectorSlider->descripcion !!}</td>
            <td><img src="{{ $sectorSlider->imagen }}" alt="{{ $sectorSlider->titulo }}" style="width: 100px;"></td>
            <td>
                {!! Form::open(['route' => ['sectorSliders.destroy', $sectorSlider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sectorSliders.show', [$sectorSlider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sectorSliders.edit', [$sectorSlider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
