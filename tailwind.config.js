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
            emerald: colors.emerald,
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
                        color: theme('colors.gray.900'),
                        strong: {
                            color: theme('colors.gray.900'),
                            fontWeight: '600',
                        },
                        a: {
                            color: theme('colors.blue.600'),
                            textDecoration: 'none',
                            '&:hover': {
                                textDecoration: 'underline',
                            },
                        },
                        // Customization example kept for reference
                        /*
                        'a strong': {
                            color: theme('colors.blue.700'),
                            fontWeight: '600',
                            '&:hover': {
                                color: theme('colors.gray.900'),
                            },
                        },
                        */
                    },
                },
            }),
            /*
             Custom values for aspect-ratio plugin
             */
            aspectRatio: {
                521: '521',
                360: '360',
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
            borderWidth: ['active'],
            borderColor: ['active', 'focus'],
            margin: ['first', 'last'],
            padding: ['first', 'last'],
            textColor: ['active'],
            zIndex: ['hover', 'active'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/line-clamp'),
        require('tailwindcss-debug-screens'),
    ],
}
