/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary:'#20396f'
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
