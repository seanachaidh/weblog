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
	//Voorlopig nog geens stijlen
    //mix.sass('app.scss');
	
	//Ik heb cafeïne nodig
	mix.coffee('main.coffee', 'public/javascript');
});
