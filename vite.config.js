import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import { bunny } from 'laravel-vite-plugin/fonts';
=======
>>>>>>> 7d9a0063dcc08e55351ad613fcb2f2512dd98ab7
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
<<<<<<< HEAD
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
=======
>>>>>>> 7d9a0063dcc08e55351ad613fcb2f2512dd98ab7
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
