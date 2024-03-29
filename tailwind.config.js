const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
         "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    theme: {
        extend: {
          gridTemplateRows: {
            '[auto,auto,1fr]': 'auto auto 1fr',
          },
        },
      },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'),('@tailwindcss/aspect-ratio')],
        plugins: [
            require('flowbite/plugin'),
        ]
    

};
