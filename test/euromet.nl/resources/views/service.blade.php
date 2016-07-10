@extends('layouts.page')

@section('back-button')
<a class="nav" href="/projects">{{ trans('menu.back_to_projects') }}</a>
@endsection

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/service#service">{{ trans('menu.service') }}</a>
    </div>
    <div id="items">
        <div class="item background-12">
            <div class="header">
                <a name="service"></a>
                <h2>{{ trans('menu.service') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('service.paragraph_1') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection