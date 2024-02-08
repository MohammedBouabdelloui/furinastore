/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      color: {
        'furina-white' : '#DAD5E3',
      },
      backgroundColor: {
        'furina-white' : '#DAD5E3',
        'furina-black' : '#000000',
        'furina-yellow' : '#D7FF00',
        'furina-blue' : '#23D7FF',
        'furina-pink' : '#DB9595',
      },
      fontFamily: {
        poppins: ['Poppins'],
        cairo: ['Cairo'],
      }
    },
  },
  plugins: [],
}

