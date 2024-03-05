const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/scss/app.scss', 'public/css');

mix.sass('resources/scss/welcome.scss', 'public/css/welcome.css')
mix.sass('resources/scss/sidebar.scss', 'public/css/sidebar.css')
mix.sass('resources/scss/register.scss', 'public/css/register.css')
mix.sass('resources/scss/login.scss', 'public/css/login.css')
// mix.sass('resources/scss/edit.scss', 'public/css/edit.css')
mix.sass('resources/scss/dashboard.scss', 'public/css/dashboard.css')
mix.sass('resources/scss/collections.scss', 'public/css/collections.css')
// mix.sass('resources/scss/category.scss', 'public/css/category.css')
mix.js('resources/js/popup.js', 'public/jsForCategory/formShow.js');
mix.js('resources/js/sidebar.js', 'public/notJs/sidebar.js');
mix.js('resources/js/dashboard.js', 'public/notJs/dashboard.js');
mix.sass('resources/scss/category.scss', 'public/not/name.css');
mix.sass('resources/scss/edit.scss', 'public/not/changeTask.css');



