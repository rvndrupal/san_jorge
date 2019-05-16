<section class="home-slider owl-carousel">
     @foreach ($slider as $sli)
    <div class="slider-item" style="background-image:url({{ $sli->sli_imagen }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center ftco-animate">
          <h1 class="mb-4">{{ $sli->sli_textouno }}</span></h1>
          <h1 class="mb-4">{{ $sli->sli_textodos }}</span></h1>
          <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
        </div>
      </div>
      </div>
    </div>
    @endforeach
  </section>

