/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      'fontSize': {
        '3xl': '80px',
        '2xl': '60px',
        '1xl': '40px',
        'xl': '36px',
        '3md' : '32px',
        '2md' : '28px',
        '1md' : '24px',
        'md' : '20px',
        'sm' : '18px',
        'm-sm' : '10px',
        'm-md' : '12px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin'),
  ],
}