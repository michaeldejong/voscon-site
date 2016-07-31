@extends('layouts.page')

@section('content')
<div class="container">
    <div id="menu-image-slider" class="image-slider">
        <div class="slider-container">
            <div class="layover">
                <img src="/images/certificates.png" />
            </div>
            <div class="images">
                <img class="active" src="/img/main-slider-0.jpg" />
                <img class="inactive" src="/img/main-slider-1.jpg" />
                <img class="inactive" src="/img/main-slider-4.jpg" />
                <img class="inactive" src="/img/main-slider-5.jpg" />
                <img class="inactive" src="/img/main-slider-2.jpg" />
                <img class="inactive" src="/img/main-slider-8.jpg" />
                <img class="inactive" src="/img/main-slider-3.jpg" />
                <img class="inactive" src="/img/main-slider-7.jpg" />
                <img class="inactive" src="/img/main-slider-6.jpg" />
            </div>
            <div class="controls">
                <i class="active"></i>
                <i class="inactive"></i>
                <i class="inactive"></i>
                <i class="inactive"></i>
                <i class="inactive"></i>
                <i class="inactive"></i>
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
                <h2>Voscon V.B.S. B.V.</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('home.paragraph_1') }}</p>
                <p>{{ trans('home.paragraph_2') }}</p>
                <p>{{ trans('home.paragraph_3') }}</p>
                <div class="news">
                    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/vosconbv" data-widget-id="610885671432155136"></a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
