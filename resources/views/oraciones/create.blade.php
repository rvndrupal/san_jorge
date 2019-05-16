@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Oracione
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'oraciones.store']) !!}

                        @include('oraciones.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
