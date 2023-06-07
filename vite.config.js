import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            //valetTls: 'laravel-webpush.test',
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/webpush.js'
            ],
            refresh: true,
        }),
    ],
});
