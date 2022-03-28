const colors = require('tailwindcss/colors');
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    important: true,
    mode: 'jit',
    purge: [
        'resources/**/*.blade.php',
        'resources/**/*.js',
    ],
    theme: {
        fontFamily: {
            sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            'inter': ["Inter", ...defaultTheme.fontFamily.sans],
            mono: ["JetBrains Mono", ...defaultTheme.fontFamily.mono]
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            spatie: '#197593',

            black: "#000000",
            white: colors.white,
            gray: colors.warmGray, 
            red: {
                200: "#f2c2c2",
                300: "#e6a9a1",
                400: "#d34c4c",
                500: "#d42327",
                600: "#a51111",
                700: "#2f0379",
                800: "#4d1f23",
                900: "#3d191d",
            },
            yellow: "#F6CA60",
            green: {
                100: "#efebff",
                200: "#c6b0f2",
                300: "#9db579",
                400: "#159f22",
                500: "rgb(23, 166, 119)",
                600: "#3a6d21",
                700: "#34521d",
                800: "#4d1f23",
                900: "#3a1a1d",
            },
            blue: {
                500: '#004cff'
            },
            purple: colors.purple,
            indigo: colors.indigo,
            orange: colors.orange,
        },
        extend: {
            minWidth: {
                8 : '2rem',
                10 : '2.5rem',
                12 : '3rem',
            },
            fontSize: {
                'px-xs': '10px',
                'px-sm': '12px',
                'px-base': '14px',
            },
            backgroundOpacity: {
                10 : '0.1',
                30 : '0.3'
            },
            gridTemplateColumns: {
                'auto-1fr' : 'auto 1fr',
            },
            backgroundImage: {
                'star-patern': "url('/images/star.svg')",
                'circle-patern': "url('/images/circle.svg')"
            },
            backgroundSize: {
                'star': "1rem",
                'circle': "0.5rem",
            },
        },
    },
    plugins: [],
};
