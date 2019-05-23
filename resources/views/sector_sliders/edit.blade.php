@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>
            Sector Slider
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sectorSlider, ['route' => ['sectorSliders.update', $sectorSlider->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('sector_sliders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
