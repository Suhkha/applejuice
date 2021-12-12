module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins']
            }
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
