var elixir = require('laravel-elixir');
require('laravel-elixir-webpack-official');
require('laravel-elixir-vue-2'); // recommended for vue 2

elixir(function(mix) {
    mix.sass('app.scss');
});