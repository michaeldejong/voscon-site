var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
	mix.copy('resources/assets/images', 'public/images');
	mix.copy('resources/assets/files', 'public/files');
	mix.copy('resources/assets/javascript', 'public/javascript/');
	mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/javascript/bootstrap.min.js');
	mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/javascript/jquery.min.js');
});