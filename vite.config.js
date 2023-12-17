import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
// import { EventEmitter } from 'events';
// import polyfillNode from 'rollup-plugin-polyfill-node'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/eth.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ]
});
