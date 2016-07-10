@extends('layouts.page')

@section('content')
<div class="container">
    <div id="menu-image-slider" class="image-slider">
        <div class="slider-container">
            <div class="layover">
                <img src="/images/certificates.png" />
            </div>
            <div class="images">
                <img class="active" src="/images/main-slider-0.jpg" />
                <img class="inactive" src="/images/main-slider-1.jpg" />
                <img class="inactive" src="/images/main-slider-2.jpg" />
                <img class="inactive" src="/images/main-slider-3.jpg" />
            </div>
            <div class="controls">
                <i class="active"></i>
                <i class="inactive"></i>
                <i class="inactive"></i>
                <i class="inactive"></i>
            </div>
        </div>
    </div>
    <div id="items">
        <div class="item background-4A">
            <div class="header">
                <a name="main"></a>
                <h2>Euromet</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('home.paragraph_1') }}</p>
                <p>{{ trans('home.paragraph_2') }}</p>
                <p>{!! trans('home.paragraph_3', ['link' => '<a href="http://voscon.nl">Voscon BV</a>']) !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection