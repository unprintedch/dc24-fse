/** @type {import('tailwindcss').Config} */
const theme = require('./theme.json');
const dc24ThemeJson = require("./dc24-theme.js");

module.exports = {
  content: [
    "./src/*.css",
    "./parts/**/*.html",
    "./*.php",
    "./blocks/**/*.{php,js}",
    "./patterns/**/*.{php,js}",
    "./templates/**/*.php",
    "./src/safelist.txt"
  ],
  theme: {
    extend: {
      colors: dc24ThemeJson.colorMapper(dc24ThemeJson.theme('settings.color.palette', theme)),
      fontSize: dc24ThemeJson.fontSizeMapper(dc24ThemeJson.theme('settings.typography.fontSizes', theme))
    },
    fontFamily: dc24ThemeJson.fontFamilyMapper(dc24ThemeJson.theme('settings.typography.fontFamilies', theme))
  },
  plugins: [],
}

