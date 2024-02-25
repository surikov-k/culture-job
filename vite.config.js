import { resolve } from 'path';

export default {
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        thank_you: resolve(__dirname, 'thank-you.html'),
      }
    }
  }
}
