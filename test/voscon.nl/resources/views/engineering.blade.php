@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/engineering#engineering">{{ trans('menu.engineering') }}</a>
    </div>
    <div id="items">
        <div class="item background-14">
            <div class="header">
                <a name="engineering"></a>
                <h2>{{ trans('menu.engineering') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('engineering.paragraph_1') }}</p>

                <div style="margin-top: 10px;">
                    <a href="http://www.youtube.com/watch?v=YPf8l9yYvM8&hd=1" target="_blank" class="play-button">
                        <img src="/images/play-icon-dark.png" style="float: left; display: inline; width: 50px; height: 49px;">
                        <h4>{{ trans('engineering.impression') }}</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection