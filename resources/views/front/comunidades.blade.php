<h1 class="mb-3">Nuestras Comunidades</h1>

<div class="row comunidad-general">

        @foreach ($comunidad as $com)

            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 comunidad">
                <!-- normal -->
                <div class="ih-item circle effect7 right_to_left"><a href="{{ $com->link }}">
                    <div class="img"><img src="{{ $com->imagen }}" alt="img"></div>
                    <div class="info">
                    <h3>{{ $com->titulo }}</h3>
                    <p>{{ $com->descripcion }}</p>
                    </div></a></div>
                <!-- end normal -->

            </div>
        @endforeach


</div>
