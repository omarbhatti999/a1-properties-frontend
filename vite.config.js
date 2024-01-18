import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import sass from 'sass';
import vue from "@vitejs/plugin-vue";
import ViteCompressionPlugin from 'vite-plugin-compression';
import { chunkSplitPlugin } from 'vite-plugin-chunk-split';

export default defineConfig({
    server: {
        // host: 'a1properties.ae',
        host: '192.168.2.46',
        port: '8001'
    },
    plugins: [
        vue(),
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        ViteCompressionPlugin({
            algorithm: 'gzip',
            ext: '.gz',
        }),
        chunkSplitPlugin({
            maxSize: 400,
        }),
        sass,
    ],
    build: {
        preload: ['resources/sass/app.scss', 'resources/js/app.js'],
        output: {
            jsxFactory: 'h',
            jsxFragment: 'Fragment',
        },
        chunkSizeWarningLimit: 400,
        assetsInlineLimit: 0,
        rollupOptions: {
            plugins: [],
        },
    },
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '@resources': path.resolve(__dirname, 'resources'),
        },
    },
    html: {
        inject: {
            injectData: {
                defer: true,
            },
        },
    },
});
