module.exports = {
  /*
   * Enable JIT mode, a bleeding edge experimental feature released with tailwind v2.1
   * If you don't want to use this, just delete the line of code.
   *
   * https://tailwindcss.com/docs/just-in-time-mode#enabling-jit-mode
   */
  mode: "jit",

  /*
   * So the purge feature. Super cool.
   * Below you need to set the purge location. This basically means where Tailwind needs to look for classes.
   * It might seem backwards, but its checking those files for things NOT to purge.
   * Unless you need to change it, you should be able to just leave this alone. It checks the php and js files.
   *
   * JIT MODE UPDATE: Does the same thing, but its instead looking for classes to ADD, not purge.
   */
  purge: ["*.php", "./assets/src/js/*.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1200px",
    },
    fontFamily: {
      main: ["Helvetica Neue LT Std", "sans-serif"], // text-gotham
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      /* How to Add custom Colors
       * Give your color a name, make it something that makes sense.
       * If you aren't going to use the colors below, delete them.
       *
       * Default is the normal base color.
       * Light / Dark are variants within the same palette
       * Classes are named text-CLASSNAME
       *
       * https://tailwindcss.com/docs/customizing-colors#custom-colors
       * */
      white: {
        DEFAULT: "#eeeeee", // text-white
      },
      light: {
        DEFAULT: "#aeaeae", // text-light
      },
      gray: {
        DEFAULT: "#909090",
      },
      charcoal: {
        DEFAULT: "#5c5c5c",
      },
      black: {
        DEFAULT: "#383838",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
