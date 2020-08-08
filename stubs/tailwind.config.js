const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './resources/css/app.css',
    './resources/views/**/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Inter',
          ...defaultTheme.fontFamily.sans,
        ]
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ],
}
