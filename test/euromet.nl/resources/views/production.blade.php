@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/production#production">{{ trans('menu.production') }}</a>
    </div>
    <div id="items">
        <div class="item background-10">
            <div class="header">
                <a name="production"></a>
                <h2>{{ trans('menu.production') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content columns-1">
                <p>{{ trans('production.paragraph_1') }}</p>
                <ul>
                    <li>{{ trans('production.list_1.item_1') }}</li>
                    <li>{{ trans('production.list_1.item_2') }}</li>
                    <li>{{ trans('production.list_1.item_3') }}</li>
                </ul>
                </p>

                <p>{{ trans('production.paragraph_2') }}</p>
                <ul>
                    <li>{{ trans('production.list_2.item_1') }}</li>
                    <li>{{ trans('production.list_2.item_2') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection