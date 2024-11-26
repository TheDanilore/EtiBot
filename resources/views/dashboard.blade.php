<head>
  <!-- Owl carousel -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('css/membresia/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/et-line-font.css') }}">
	<link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/nivo_themes/default/default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/membresia/style.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>

<x-app-layout>

  <!-- Carousel
    ================================================== -->
  <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#homeCarousel" data-slide-to="1"></li>
      <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">

        <img src="{{ asset('img/carrusel/home-slider-5.webp') }}" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">Utiliza la IA correctamente en tus estudios</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow ">Aprende con nosotros</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">Comenzar</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->


      <div class="item ">

        <img src="{{ asset('img/carrusel/home-slider-2.webp') }}" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">“Juntos podemos construir un futuro educativo más justo, inclusivo y enriquecido por la IA”</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow"> Let´s go</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">Comenzar</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->




      <div class="item ">

        <img src="{{ asset('img/carrusel/home-slider-3.webp') }}" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">Utiliza la IA correctamente en tus estudios</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow">Aprende con nosotros</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">Comenzar</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->

    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div><!-- /.carousel -->

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h1>“Juntos podemos construir un futuro educativo más justo,
            inclusivo y enriquecido por la IA”</h1>


        </div>
      </div>
    </div>
  </div>

  <!-- pricing section -->
  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <div class="section-title">
            <strong></strong>
            <h1 class="planes">Nuestros planes</h1>
            <h2 class="sec2"> Elige <br> tu paquete</h2>
            <h3 class="sec3">Nuestros planes son claros y abiertos, sin<br>
              sobresaltos ni límites .La ayuda siempre esta aquí<br>
              cuando la necesites</h3>
            <hr>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="plan plan-one wow bounceIn" data-wow-delay="0.5s">
            <div class="plan_title1">
              <!-- <i class="icon-mobile medium-icon"></i> -->
              <h3>BASICO</h3>
              <img class="imagen" src="{{ asset('img/membresia/Imagen-PR.png') }}" alt="">
              <h2>S/0.00/mes <span></span></h2><br><br>
            </div>
            <ul class="r1">
              <li>Guía etibot en el uso
                del sitio web</li>


              <li class="r3">Recursos adicionales y personalizados</li>
              <li class="r4">Disponiblidad de foros</li>
            </ul>
            <button class="btn btn-warning">Seleccionar paquete</button>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="plan plan-three wow bounceIn" data-wow-delay="0.5s">
            <div class="plan_title2">
              <!-- <i class="icon-cloud medium-icon"></i> -->
              <h3>PREMIUM</h3>
              <img class="imagen" src="{{ asset('img/membresia/Imagen-PR.png') }}" alt="">
              <h2>S/8.00/mes<span></span></h2><br><br>
            </div>
            <ul>
              <li>Guía etibot en el uso del sitio web</li>
              <li>Recursos adicionales y personalizados</li>
              <li>Disponiblidad de foros</li>
            </ul>
            <button class="btn btn-warning">Seleccionar paquete</button>
          </div>
        </div>
      </div>
    </div>
  </section>


</x-app-layout>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/nivo-lightbox.min.js') }}"></script>
<script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>