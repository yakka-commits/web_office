import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // PALET WARNA IDENTIK DENGAN WEB JAWA III
            colors: {
                primary: '#0B1727',    // Deep Navy (Background Utama Dark Mode)
                surface: '#132337',    // Navy Sedikit Terang (Background Kartu Dark Mode)
                accent: '#0D9488',     // Teal/Tosca Terang (Warna Tombol & Sorotan)
                'accent-hover': '#0F766E', // Tosca Gelap untuk Hover
            }
        },
    },

    plugins: [forms],
};