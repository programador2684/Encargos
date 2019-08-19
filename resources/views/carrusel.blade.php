@extends('layouts.app')

@section('content')

<html>

<head>
  <link rel="stylesheet" href="{{ asset("asset/css/carrusel.css") }}">
</head>

  <body>
    <section class="awSlider">
      <div  class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target=".carousel" data-slide-to="0" class="active"></li>
          <li data-target=".carousel" data-slide-to="1"></li>
          <li data-target=".carousel" data-slide-to="2"></li>
          <li data-target=".carousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height:400px !important; width:100% !important;">
            <div class="item active" >
              <img src="https://www.diariomotor.com/imagenes/picscache/1440x655c/bugatti-chiron-2016-mas-p2_1440x655c.jpg">
            </div>
            <div class="item">
              <img src="http://lanoticiaenguatemala.com/wp-content/uploads/2016/01/lotus-exige-sport-350-2016-p_1440x655c.jpg">
            </div>
            <div class="item">
              <img src="https://www.diariomotor.com/imagenes/picscache/1440x655c/infiniti-qx50-2018-28_1440x655c.jpg">
            </div>
            <div class="item">
              <img src="https://www.diariomotor.com/imagenes/picscache/1440x655c/nissan-leaf-2018-06_1440x655c.jpg">
            </div>
            <div class="item">
              <img src="https://www.diariomotor.com/imagenes/picscache/1920x1600c/mclaren-mp4-12c_1920x1600c.jpg">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Geri</span>
        </a>
        <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">İleri</span>
        </a>
      </div>
    </section>
  </body>

      <script rel="stylesheet" href="{{ asset("asset/js/carrusel.js") }}"></script>
      <!-- Compiled and minified Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!-- Minified JS library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Compiled and minified Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</html>




@endsection