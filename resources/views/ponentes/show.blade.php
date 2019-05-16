@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Ponente
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ponentes.show_fields')
                    <a href="{!! route('ponentes.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
