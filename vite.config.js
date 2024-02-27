import { resolve } from 'path';
import liveReload from 'vite-plugin-live-reload'
import { defineConfig } from 'vite';


export default defineConfig( {
  plugins: [
    liveReload([__dirname + '/public/*.php'])
  ],
  root: 'src',
  base: process.env.APP_ENV === 'development'
    ? '/'
    : '/dist/',

  build: {
    // output dir for production build
    outDir: '../public/dist',
    emptyOutDir: true,

    // emit manifest so PHP can find the hashed files
    manifest: true,

    // our entry
    rollupOptions: {
      input: resolve(__dirname, 'src/main.js'),
    },
  },
  server: {
    // we need a strict port to match on PHP side
    // change freely, but update on PHP to match the same port
    // tip: choose a different port per project to run them at the same time
    strictPort: true,
    port: 5133
  },
});

