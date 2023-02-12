const mix = require("laravel-mix");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// KHUSUS TAILWINDCSS
mix.js("resources/js/app.js", "public/js").postCss("resources/css/app.css", "public/css/tailwindcss/app.css", [require("tailwindcss"),])
// CUSTOM AND OWL CARAUSEL.css("./node_modules/owl.carousel/dist/assets/owl.carousel.min.css", "public/css/app.css").css("./node_modules/owl.carousel/dist/assets/owl.theme.default.min.css", "public/css/app.css").css("resources/css/custom.css", "public/css/app.css");

// jquery caller
mix.autoload({
    jquery: ["$", "window.$", "window.jQuery"]
});

const domain = "mysite.test";
const homedir = require("os").homedir();
// The mix script:
mix.browserSync({
    proxy: "https://" + domain,
    host: domain,
    https: {
        key: homedir + "/.valet/Certificates/" + domain + ".key",
        cert: homedir + "/.valet/Certificates/" + domain + ".crt"
    },
    notify: false, // Enable or disable notifications
});
mix.disableSuccessNotifications();
