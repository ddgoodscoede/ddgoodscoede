module.exports = {
    purge: {
        content: [
            'source/**/*.php',
            'source/**/*.blade.php',
            'source/**/*.md',
            'source/**/*.html',
        ]
    },
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
