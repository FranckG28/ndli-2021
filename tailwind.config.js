const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        sans: ['Roobert', ...defaultTheme.fontFamily.sans],
        serif: ['Vesterbro', ...defaultTheme.fontFamily.serif]
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
