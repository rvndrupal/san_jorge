@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Comunidade
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'comunidades.store', 'files' => true]) !!}

                        @include('comunidades.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
