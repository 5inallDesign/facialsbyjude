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
    mix.sass(
		'stylesheet.scss',
		'public/css/stylesheet.css',
		{
	        includePaths: [
	            'vendor/twbs/bootstrap-sass/assets/stylesheets/',
	            'vendor/fortawesome/font-awesome/scss/'
	        ],
      	}
    );
    mix.copy('vendor/twbs/bootstrap-sass/assets/javascripts/*.js', 'resources/assets/js/bootstrap');
    mix.scripts(
		[
	        'jquery-2.2.0.min.js',
	        'bootstrap/bootstrap.js'
		],
		'public/js/master.js'
    );
	mix.copy('vendor/twbs/bootstrap-sass/assets/fonts', 'public/fonts/bootstrap');
	mix.copy('vendor/fortawesome/font-awesome/fonts', 'public/fonts');
	mix.copy('resources/assets/fonts', 'public/fonts');
});
