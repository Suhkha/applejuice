module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins']
            },
            fontSize: {
                'xxs': '0.55rem'
            }
        }, 
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
