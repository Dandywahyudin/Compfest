/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        Brown: '#3F2305',
        Cream: '#F2EAD3',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
