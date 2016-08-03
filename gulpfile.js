var elixir = require('laravel-elixir');
var gulp = require('gulp');
var del = require('del');

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

/*Taak vor het kopiëren van alle angular modules */

gulp.task('copy:libs', [], function() {
	return gulp.src([
		'node_modules/core-js/client/shim.min.js',
		'node_modules/zone.js/dist/zone.js',
		'node_modules/reflect-metadata/Reflect.js',
		'node_modules/rxjs/bundles/Rx.umd.js',
		'node_modules/@angular/core/bundles/core.umd.js',
		'node_modules/@angular/common/bundles/common.umd.js',
		'node_modules/@angular/compiler/bundles/compiler.umd.js',
		'node_modules/@angular/platform-browser/bundles/platform-browser.umd.js',
		'node_modules/@angular/platform-browser-dynamic/bundles/platform-browser-dynamic.umd.js',
		'node_modules/zone.js/dist/zone.min.js'
	]).pipe(gulp.dest('public/javascript/angular'))
});

elixir(function(mix) {
	//Voorlopig nog geens stijlen
    mix.sass('app.scss', 'public/styles');
	
	//Ik heb cafeïne nodig
	mix.coffee(['berichtservice.coffee', 'appcomponent.coffee', 'main.coffee'], 'public/javascript');
});
