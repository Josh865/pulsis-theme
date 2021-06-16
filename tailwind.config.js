const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  mode: 'jit',
  prefix: 'theme-',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false,
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    colors: {
      ...defaultTheme.colors,
      gray: colors.warmGray, // Warm grays work better with black/gold brand colors
    },
    extend: {
      colors: {
        gold: {
          DEFAULT: '#cfb991', // Boilermaker Gold
          50: '#101101103',
          100: '#faf8f4',
          200: '#efe7dc',
          300: '#e5d8c3',
          400: '#dac8aa',
          500: '#cfb991', // Boilermaker Gold
          600: '#b8965c',
          700: '#8e6f3e', // Aged
          800: '#594527',
          900: '#231b10',
        },
      },

      fontFamily: {
        sans: [
          'acumin-pro',
          'Franklin Gothic',
          ...defaultTheme.fontFamily.sans,
        ],
        serif: [
          'source-serif-pro',
          'Georgia',
          ...defaultTheme.fontFamily.serif,
        ],
        condensed: ['acumin-pro-condensed', ...defaultTheme.fontFamily.sans],
        'semi-condensed': [
          'acumin-pro-semi-condensed',
          'Franklin Gothic',
          ...defaultTheme.fontFamily.sans,
        ],
        'extra-condensed': [
          'acumin-pro-extra-condensed',
          'Franklin Gothic',
          ...defaultTheme.fontFamily.sans,
        ],
        rigid: ['United Sans', 'Impact'],

        // The following are rarely used. Uncomment if needed and enable in
        // /resources/css/united-sans.css
        // 'rigid-condensed': ['United Sans Condensed', 'Impact'],
        // 'rigid-extended': ['United Sans Extended', 'Impact'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
