const colors = require('tailwindcss/colors');
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    important: true,
    mode: 'jit',
    purge: [
        'app/**/*.php',
        'resources/**/*.blade.php',
        'resources/**/*.js',
    ],
    theme: {
        fontFamily: {
            'sans': ["Inter", ...defaultTheme.fontFamily.sans],
            mono: ["JetBrains Mono", ...defaultTheme.fontFamily.mono]
        },
        extend: {
            colors: {
                current: 'currentColor',
                spatie: '#197593',
                indigo: {
                    500: '#423ac7',
                    600: '#3831a8',
                    700: '#2e298c',
                    900: '#1a154d',
                },
                red: {
                    400: '#fc613d',
                    500: '#ff4a19',
                },
            },
        },
    },
    plugins: [],
};
