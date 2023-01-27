/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./storage/framework/views/*/php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.vue",
  ],
  theme: {
    extend: {  
    colors: {
      'wec-gold': '#816700',
      'wec-blue': '#333366',
      'wec-light-blue': '#3A3A8C'
    }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
