@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/certification#iso9001">{{ trans('menu.certification.iso9001') }}</a>
        <a class="nav" href="/certification#vca">{{ trans('menu.certification.vca') }}</a>
    </div>
    <div id="items">
        <div class="item background-15A">
            <div class="header">
                <a name="iso9001"></a>
                <h2>{{ trans('menu.certification.iso9001') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('certification.iso9001.paragraph_1') }}</p>
                <p>{{ trans('certification.iso9001.paragraph_2') }}</p>
                <p>{{ trans('certification.iso9001.paragraph_3') }}</p>
            </div>
        </div>
        <div class="item background-15B">
            <div class="header">
                <a name="vca"></a>
                <h2>{{ trans('menu.certification.vca') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('certification.vca.paragraph_1') }}</p>
                <p>{{ trans('certification.vca.paragraph_2') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection