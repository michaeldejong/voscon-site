@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/projects/filter-cabinet">{{ trans('menu.projects.filter_cabinet') }}</a>
        <a class="nav" href="/projects/filtration-tower">{{ trans('menu.projects.filtration_tower') }}</a>
        <a class="nav" href="/projects/floating-pontoon">{{ trans('menu.projects.floating_pontoon') }}</a>
        <a class="nav" href="/projects/spiral-staircase">{{ trans('menu.projects.spiral_staircase') }}</a>
    </div>
    <div id="items">
        <div class="item">
            <div class="header">
                <a name="projects"></a>
                <h2>{{ trans('menu.projects') }}</h2>
                @yield('back-button')
            </div>
            @yield('project')
        </div>
    </div>
</div>
@endsection