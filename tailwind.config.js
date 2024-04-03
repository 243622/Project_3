/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}"
    ],

    theme: {
        extend: {
            colors: {
                'stonks-red':'#d63b1d',
              }
        },
    },
    plugins: [],
}

