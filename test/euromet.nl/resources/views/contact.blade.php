@extends('layouts.page')

@section('content')
<div class="container">
    <div id="sub-menu-bar">
        <a class="nav" href="/contact/#contact-us">{{ trans('menu.contact.contact_us') }}</a>
        <a class="nav" href="/contact/#contactform">{{ trans('menu.contact.contactform') }}</a>
        <a class="nav" href="/contact/#directions">{{ trans('menu.contact.directions') }}</a>
    </div>
@if (app('request')->input('success') !== null)
    @if (app('request')->input('success') == 'false')
    <div class="alert alert-danger">{{ trans('contact.error') }}</div>
    @else
    <div class="alert alert-success">{{ trans('contact.success') }}</div>
    @endif
@endif
    <div id="items">
        <div class="item background-4B">
            <div class="header">
                <a name="contact-us"></a>
                <h2>{{ trans('menu.contact.contact_us') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom: 18px;">
                    <div><strong>{{ trans('contact.visiting_address') }}:</strong></div>
                    <div>Energieweg 21F</div>
                    <div>3133 EB, Vlaardingen</div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom: 18px;">
                    <div><strong>{{ trans('contact.postal_address') }}:</strong></div>
                    <div>Energieweg 25</div>
                    <div>3133 EC, Vlaardingen</div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom: 18px;">
                    <div>Tel: {{ trans('contact.phone_number') }}</div>
                    <div>Fax: {{ trans('contact.fax_number') }}</div>
                    <div>Mail: <a href="mailto:info@euromet.nl">info@euromet.nl</a></div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="header">
                <a name="contactform"></a>
                <h2>{{ trans('menu.contact.contactform') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content">
                <form method="post" action="/contact">
                    <div class="form-group">
                        <label for="email">{{ trans('contact.email') }}</label>
                        <div class="controls">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{ trans('contact.email') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ trans('contact.phone') }}</label>
                        <div class="controls">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ trans('contact.phone') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body">{{ trans('contact.message') }}</label>
                        <div class="controls">
                            <textarea class="form-control" name="body" id="body" placeholder="{{ trans('contact.message') }}" rows="7"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary" name="submit">{{ trans('contact.submit') }}</button>
                </form>
            </div>
        </div>
        <div class="item">
            <div class="header">
                <a name="directions"></a>
                <h2>{{ trans('menu.contact.directions') }}</h2>
                <a class="nav" href="#">{{ trans('menu.back_to_top') }}</a>
            </div>
            <div class="content">
                <iframe style="width: 100%;" class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11195.083426181875!2d4.337536929120424!3d51.9008015285152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c44afbcee3399b%3A0xc16d4fa50a60806e!2sEuromet+B.V.!5e0!3m2!1snl!2snl!4v1447509949613"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection