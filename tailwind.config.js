const colors = require('tailwindcss/colors')

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
        /*
         Custom color palette
         */
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            green: colors.green,
            teal: colors.teal,
            red: colors.red,
            yellow: colors.yellow,
            blue: colors.blue,
        },
        extend: {
            /*
             Typography plugin (.prose class) customization
             */
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        strong: {
                            color: theme('colors.gray.900'),
                            fontWeight: '600',
                        },
                        a: {
                            color: theme('colors.blue.500'),
                            textDecoration: 'none',
                            '&:hover': {
                                color: 'inherit',
                            },
                        },
                        'a strong': {
                            color: theme('colors.blue.700'),
                            fontWeight: '600',
                            '&:hover': {
                                color: theme('colors.gray.900'),
                            },
                        },
                    },
                },
            }),
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
            borderWidth: ['active'],
            borderColor: ['active', 'focus'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('tailwindcss-debug-screens'),
    ],
}
