@extends('layouts.project')

@section('back-button')
<a class="nav" href="/projects">{{ trans('menu.back_to_projects') }}</a>
@endsection

@section('project')
<div class="content columns-1">
    <div class="image-list">
        <img src="/images/projects/floating-pontoon/ponton_1.jpg" />
        <img src="/images/projects/floating-pontoon/ponton_2.jpg" />
        <img src="/images/projects/floating-pontoon/ponton_3.jpg" />
        <img src="/images/projects/floating-pontoon/ponton_4.jpg" />
        <img src="/images/projects/floating-pontoon/ponton_5.jpg" />
        <img src="/images/projects/floating-pontoon/ponton_6.jpg" />
        <img src="/images/projects/floating-pontoon/ponton_7.jpg" />
    </div>
</div>
@endsection