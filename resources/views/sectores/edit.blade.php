@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Sectore
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sectore, ['route' => ['sectores.update', $sectore->id], 'method' => 'patch']) !!}

                        @include('sectores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
