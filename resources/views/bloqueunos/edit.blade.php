@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Bloqueuno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bloqueuno, ['route' => ['bloqueunos.update', $bloqueuno->id], 'method' => 'patch']) !!}

                        @include('bloqueunos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
