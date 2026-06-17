import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/jquery.fancybox.min.css',
                'resources/css/main.css',
                'resources/js/owl.carousel.js',
                'resources/js/jquery.fancybox.min.js',
                'resources/js/jquery.easing.js',
                'resources/js/main.js'
            ],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
