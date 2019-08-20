@extends('layouts.app')

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwwQRAUC08y3aqZ9QnpJjdRX1cpeBM3H-uw6Z9okwsfpCWv0rYRA" style="width:100% !important; height:250px !important;"> 
        </div>
        <div class="item">
            <img src="images/image-2.jpeg" >
        </div>
        <div class="item">
            <img src="images/image-3.jpeg" width="100%">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection