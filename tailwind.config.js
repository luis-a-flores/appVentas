import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },


            colors:{

                companyColor: {
                    primary : '#266ddd',
                    'primary-lighter': '#67bed9',
                    secondary: '#dd2826',
                    third: '#8326dd',
                    text1: '#fff',
                    text2: '#f2f2f2',


                },

                navigationMenu : {
                    background : '#2C2C2C',
                    text: '#f2f2f2'
                }
              },
        },
    },

    plugins: [forms, typography],
};
