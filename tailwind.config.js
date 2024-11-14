import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            backgroundImage:{
              'element-3d':"url(/src/img/image.png)",
            },
            colors : {
              'bg-main' : '#00006b',
              'white': '#ffffff',
              'white-grayish' : '#F4F4F4',
              'sea-blue' : '#1494EF',
              'secondary' : '#1393ee'
            },
        
          fontFamily : {
            'instrument-sans' : ['Instrument Sans']
          },
      
          keyframes: {
            'slide-down': {
              '0%': { transform: 'translateY(-100%)', opacity: '0' },
              '100%': { transform: 'translateY(0)', opacity: '1' },
            },
        },
      
        animation: {
          'slide-down': 'slide-down 0.5s ease-out forwards',
        },
      },
    },
    plugins: [],
};
