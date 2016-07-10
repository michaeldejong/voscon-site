@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/assembly#assembly">{{ trans('menu.assembly') }}</a>
    </div>
    <div id="items">
        <div class="item background-11">
            <div class="header">
                <a name="assembly"></a>
                <h2>{{ trans('menu.assembly') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1-1">
                <p>{{ trans('assembly.paragraph_1') }}</p>
                <p>{{ trans('assembly.paragraph_2') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection