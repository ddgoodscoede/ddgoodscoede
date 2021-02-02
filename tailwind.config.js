const colors = require('tailwindcss/colors')
const plugin = require('tailwindcss/plugin')

/*
 Custom smaller sizing scale for extending various utilities, like minWidth
 */
smallSizingScale = {
    '0.5': '0.125rem',
    '1': '0.25rem',
    '1.5': '0.375rem',
    '2': '0.5rem',
    '2.5': '0.625rem',
    '3': '0.75rem',
    '3.5': '0.875rem',
    '4': '1rem',
    '5': '1.25rem',
    '6': '1.5rem',
    '7': '1.75rem',
    '8': '2rem',
    '9': '2.25rem',
    '10': '2.5rem',
    '11': '2.75rem',
    '12': '3rem',
    '14': '3.5rem',
    '16': '4rem',
    '20': '5rem',
    '24': '6rem',
    '28': '7rem',
    '32': '8rem',
    '36': '9rem',
    '40': '10rem',
    '44': '11rem',
    '48': '12rem',
    '52': '13rem',
    '56': '14rem',
    '60': '15rem',
    '64': '16rem',
    '72': '18rem',
    '80': '20rem',
    '96': '24rem',
};

/*
 Main Tailwind configuration
 */
module.exports = {
    important: true,
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
            lightBlue: colors.lightBlue,
        },
        extend: {
            /*
             Additional options for various Tailwind utilities
             */
            // Custom values for aspect-ratio plugin. Required for various non-standard sized images.
            aspectRatio: {
                521: '521',
                360: '360',
            },
            // Extending min-width utilities using a custom sizing scale (see above).
            minWidth: smallSizingScale,
            borderWidth: {
                '3': '3px',
            },
            inset: {
                // Used on dropdown menus
                'full-skewed-2': 'calc(100% - 0.5rem)',
                'full-skewed-4': 'calc(100% - 1rem)',
            },
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
                            '&:active': {
                                color: theme('colors.blue.800'),
                            },
                        },
                        // Nested elements customization example kept for reference
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
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active', 'activated'],
            borderWidth: ['active'],
            borderColor: ['active', 'focus'],
            display: ['group-hover', 'activated'],
            margin: ['first', 'last'],
            opacity: ['activated'],
            padding: ['first', 'last'],
            textColor: ['active'],
            transform: ['group-hover', 'activated'],
            translate: ['group-hover', 'activated'],
            visibility: ['group-hover', 'activated'],
            zIndex: ['hover', 'active'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/line-clamp'),
        require('tailwindcss-debug-screens'),
        plugin(function({addVariant, e}) {
            addVariant('activated', ({ modifySelectors, separator }) => {
                modifySelectors(({ className }) => {
                    return `.activator:checked ~ .${e(`activated${separator}${className}`)}`
                })
            })
        }),
    ],
};
