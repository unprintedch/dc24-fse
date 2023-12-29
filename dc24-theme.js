const plugin = require('tailwindcss/plugin');

const theme = (path, theme) => {
    return path.split('.').reduce(function(previous, current) {
        return previous ? previous[current] : null
    }, theme || self);
}

const colorMapper = (colors) => {
    let result = {};
    colors.forEach(function(color) {
        result[''+color.slug+''] = color.color;
    });
    
    return result;
}
const fontSizeMapper = (fontSizes) => {
    let result = {};
    fontSizes.forEach(function(fontSize) {
        result[''+fontSize.slug+''] = fontSize.size;
    });

    return result;
}
const fontFamilyMapper = (fontFamilies) => {
    let result = {};
   
    fontFamilies.forEach(function(fontFace) {
        result[''+fontFace.slug+''] = fontFace.fontFamily;
    });
  
    return result;
}

module.exports = {theme, colorMapper, fontSizeMapper, fontFamilyMapper};
