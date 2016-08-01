@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/certification#iso9001">{{ trans('menu.certification.iso9001') }}</a>
        <a class="nav" href="/certification#vca">{{ trans('menu.certification.vca') }}</a>
        <a class="nav" href="/certification#nen1090">{{ trans('menu.certification.nen1090') }}</a>
        <a class="nav" href="/certification#training">{{ trans('menu.certification.training') }}</a>
        <a class="nav" href="/certification#oom">{{ trans('menu.certification.oom') }}</a>
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
                <p>{{ trans('certification.iso9001.paragraph_4') }}</p>
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
        <div class="item">
            <div class="header">
                <a name="nen1090"></a>
                <h2>{{ trans('menu.certification.nen1090') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('certification.nen1090.paragraph_1') }}</p>
                <p>{{ trans('certification.nen1090.paragraph_2') }}</p>
                <p>{{ trans('certification.nen1090.paragraph_3') }}</p>
                <p>{{ trans('certification.nen1090.paragraph_4') }}</p>
                <p>{{ trans('certification.nen1090.paragraph_5') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="header">
                <a name="training"></a>
                <h2>{{ trans('menu.certification.training') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('certification.training.paragraph_1') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="header">
                <a name="oom"></a>
                <h2>{{ trans('menu.certification.oom') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('certification.oom.paragraph_1') }}</p>
                <p>{{ trans('certification.oom.paragraph_2') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
