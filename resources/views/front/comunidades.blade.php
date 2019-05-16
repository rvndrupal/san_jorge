
<h1 class="mb-3 comunidad-titulo">Nuestras Comunidades</h1>

<div class="row comunidad-general">

        @foreach ($comunidad as $com)


                @if($loop->index <= 3)

                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 comunidad   {{ $loop->index }}">
                        <div class="ih-item circle effect7 bottom_to_top"><a href="{{ $com->link }}"  target="_blank" >
                                <div class="img"><img src="{{ $com->imagen }}" alt="img"></div>
                                <div class="info">
                                <h3>{{ $com->titulo }}</h3>
                                <p>{{ $com->descripcion }}</p>
                                </div></a></div>
                            <!-- end normal -->

                @else
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 comunidad-izq">
                    <div class="ih-item circle effect7 bottom_to_top"><a href="{{ $com->link }}" target="_blank">
                            <div class="img"><img src="{{ $com->imagen }}" alt="img"></div>
                            <div class="info">
                            <h3>{{ $com->titulo }}</h3>
                            <p>{{ $com->descripcion }}</p>
                            </div></a></div>
                        <!-- end normal -->


                @endif


</div>
        @endforeach


</div>
