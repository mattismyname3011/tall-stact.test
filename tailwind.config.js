import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],

  theme: {
    extend: {
      fontFamily: {
        Playfair: ['"Playfair Display"', "serif"],
        Urbanist: ['"Urbanist"', "sans-serif"],
        NexaExtraLight: ['"Nexa-ExtraLight"', "sans-serif"],
        NexaHeavy: ['"Nexa-Heavy"', "sans-serif"],
        // sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        // PlayfairDisplay: ["Playfair Display"],
        // Kaushan: ["Kaushan Script"],
      },
    },
  },

  plugins: [forms, require("flowbite/plugin")],
};
