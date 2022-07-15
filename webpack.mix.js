let mix = require('laravel-mix');
const path = require('path');
const fs = require('fs');
const LiveReloadPlugin = require('webpack-livereload-plugin');
// Определяем важные пути
const resources_path = './wp-content/themes/classy/';

let templates = [];
let files_scss = fs.readdirSync(resources_path + 'sass/pages/');
let files_js = fs.readdirSync(resources_path + 'js/pages/');

// Куда копировать ресурсы из CSS
mix.setPublicPath(resources_path + 'dist');

// Автоподмена пути к ресурсам в cSS
mix.setResourceRoot('/wp-content/themes/classy/dist');

// mix.alias({
//     sass: path.join(resources_path + 'sass'),
//     img: path.join(resources_path + 'img'),
// });

mix.webpackConfig({
    resolve: {
        alias: {
            Sass: path.resolve(__dirname, 'wp-content', 'themes', 'classy', 'sass'),
            ImgPath: path.resolve(__dirname, 'wp-content', 'themes', 'classy', 'img')
        }
    }
});

// console.log(path.resolve(__dirname, 'wp-content', 'themes', 'classy', 'sass'));

mix.webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ],
        alias: {
            sass: resources_path + 'sass'
        }
    }
});

// Для маски - @import "blocks/**/*.scss"
mix.webpackConfig((options) => {
    return {
        module: { rules: [ { test: /\.scss$/, loader: 'import-glob-loader' }, ] },
        plugins: [new LiveReloadPlugin()]
    }
});

mix.options({
    processCssUrls: true,
});

// JS
mix.js(resources_path + 'js/index.js', resources_path + 'dist')

    // SASS
    .sass(resources_path + 'sass/style.scss', resources_path + 'dist')

    // Generate sourceMaps
    .sourceMaps(true,'source-map')

    // Add hash version to file {{ mix('/css/app.css') }}
    .version()

files_scss.forEach(file => {
    mix.sass(resources_path + 'sass/pages/' + file, resources_path + 'dist/pages')
        // Generate sourceMaps
        .sourceMaps(true,'source-map')

        // Add hash version to file {{ mix('/css/app.css') }}
        .version();
});

files_js.forEach(file => {
    mix.js(resources_path + 'js/pages/' + file, resources_path + 'dist/pages')

        // Generate sourceMaps
        .sourceMaps(true,'source-map')

        // Add hash version to file {{ mix('/css/app.css') }}
        .version();
})

if (mix.inProduction()) {
    // mix.version();
}

// ================ Example =================

// Images - (already copied automatically from CSS)
// .copy(resources_path + 'images', resources_path + 'dist/images', false )

// Fonts - (already copied automatically from CSS)
//.copy(resources_path + 'fonts', resources_path + 'dist/fonts', false )


// .browserSync(
// {
//     files: ["public/**/*", "craft/config/**/*", "craft/templates/**/*"],
//     proxy: "https://sargentmetal.dev"
// }
