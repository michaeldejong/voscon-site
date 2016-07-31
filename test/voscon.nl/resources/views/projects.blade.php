@extends('layouts.project')

@section('project')
<div class="content projects">
    <a href="/projects/filter-cabinet">
        <div class="project-item" style="background-image: url(/images/projects/filterkast.jpg);">
            <div class="project-item-overlay">
                <div class="project-item-title">{{ trans('menu.projects.filter_cabinet') }}</div>
            </div>
        </div>
    </a>
    <a href="/projects/filtration-tower">
        <div class="project-item" style="background-image: url(/images/projects/filtertoren.jpg);">
            <div class="project-item-overlay">
                <div class="project-item-title">{{ trans('menu.projects.filtration_tower') }}</div>
            </div>
        </div>
    </a>
    <a href="/projects/floating-pontoon">
        <div class="project-item" style="background-image: url(/images/projects/ponton.jpg);">
            <div class="project-item-overlay">
                <div class="project-item-title">{{ trans('menu.projects.floating_pontoon') }}</div>
            </div>
        </div>
    </a>
    <a href="/projects/spiral-staircase">
        <div class="project-item" style="background-image: url(/images/projects/spiltrap.jpg);">
            <div class="project-item-overlay">
                <div class="project-item-title">{{ trans('menu.projects.spiral_staircase') }}</div>
            </div>
        </div>
    </a>
</div>
@endsection