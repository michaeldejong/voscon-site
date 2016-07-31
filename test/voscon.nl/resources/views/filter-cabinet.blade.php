@extends('layouts.project')

@section('back-button')
<a class="nav" href="/projects">{{ trans('menu.back_to_projects') }}</a>
@endsection

@section('project')
<div class="content columns-1">
    <div class="image-list">
        <img src="/images/projects/filter-cabinet/filterkast02.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast03.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast04.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast05.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast06.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast07.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast08.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast09.jpg" />
        <img src="/images/projects/filter-cabinet/filterkast10.jpg" />
        <img src="/images/projects/filter-cabinet/toegangsluik.jpg" />
    </div>
</div>
@endsection