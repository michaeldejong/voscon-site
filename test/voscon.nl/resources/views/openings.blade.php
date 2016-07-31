@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/openings#openings">{{ trans('menu.openings.applying') }}</a>
    </div>
    <div id="items">
        <div class="item">
            <div class="header">
                <a name="openings"></a>
                <h2>{{ trans('menu.openings.applying') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1">
                <p>{{ trans('openings.paragraph_1') }}</p>
                <p>{!! trans('openings.paragraph_2', ['mailto' => '<a href="mailto:n.boender@voscon.nl">N. Boender</a>']) !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection