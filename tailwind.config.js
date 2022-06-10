/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            'sm': '576px',
            // => @media (min-width: 576px) { ... }

            'md': '960px',
            // => @media (min-width: 960px) { ... }

            'lg': '1440px',
            // => @media (min-width: 1440px) { ... }
        },
        extend: {
            colors: {
                'army': '#1E5128',
                'light-army': '#4E9F3D',
                'dark-army': '#191A19',
                'cream': '#D8E9A8',
            },
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [require('prettier-plugin-tailwindcss')],
    tailwindConfig: './styles/tailwind.config.js',
}