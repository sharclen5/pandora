const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: {
      content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
      ],
    },
    theme: {
        extend: {
          fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
          },
        },
<<<<<<< HEAD
    },

    plugins: [forms],

    
};
=======
      },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
  }
>>>>>>> 6b43904636c681f3811cbabded0cd39139bf2a0f
