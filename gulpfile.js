var elixir = require('laravel-elixir');
var gulp = require('gulp');

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
    mix.sass('app.scss', 'public/styles');
	
	//Ik heb cafeïne nodig
	//mix.coffee(['loginservice.coffee', 'berichtservice.coffee', 'berichtcomponent.coffee',
	//			'appcomponent.coffee', 'berichtform.coffee', 'main.coffee'], 'public/javascript');
});
