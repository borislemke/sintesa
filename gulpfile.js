var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(function(mix) {
    mix
        .sass("style.scss")
        .livereload();
});
