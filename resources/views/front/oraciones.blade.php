<section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
        <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-teacher"></span>
        </div>
        <div class="media-body p-2 mt-3">
            @foreach ($oraciones as $oracion)
                @if($oracion->bloque=="Uno")
                <h3 class="heading">{{ $oracion->titulo }}</h3>
                <p>{{ $oracion->frase }}</p>
                @endif
            @endforeach
        </div>
        </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
        <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-reading"></span>
        </div>
        <div class="media-body p-2 mt-3">
            @foreach ($oraciones as $oracion)
                @if($oracion->bloque=="Dos")
                <h3 class="heading">{{ $oracion->titulo }}</h3>
                <p>{{ $oracion->frase }}</p>
                @endif
            @endforeach
        </div>
        </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
        <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-books"></span>
        </div>
        <div class="media-body p-2 mt-3">
            @foreach ($oraciones as $oracion)
                @if($oracion->bloque=="Tres")
                <h3 class="heading">{{ $oracion->titulo }}</h3>
                <p>{{ $oracion->frase }}</p>
                @endif
            @endforeach
        </div>
        </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
        <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diploma"></span>
        </div>
        <div class="media-body p-2 mt-3">
            @foreach ($oraciones as $oracion)
                @if($oracion->bloque=="Cuatro")
                <h3 class="heading">{{ $oracion->titulo }}</h3>
                <p>{{ $oracion->frase }}</p>
                @endif
            @endforeach
        </div>
        </div>
    </div>
    </div>
    </div>
</section>
