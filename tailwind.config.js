/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    //"./inc/**/*.{php,js}",
    //"./assets/**/*.{html,js}",
    "./*.{php,html,js}",
    "./**/*.{php,js}",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
      },
    },
    screens: {
      sm: "576px",
      "sm-max": { max: "576px" },
      md: "768px",
      "md-max": { max: "768px" },
      lg: "992px",
      "lg-max": { max: "992px" },
      xl: "1200px",
      "xl-max": { max: "1200px" },
      "2xl": "1320px",
      "2xl-max": { max: "1320px" },
    },
    extend: {
      colors: {
        primary: "#66D2CE",
        primaryLight: "#ECDD76",
        secondary: "#D29E48",
      },
      fontFamily: {
        remix: ["remixicon"],
      },
      keyframes: {
        translate3d: {
          "0%": { transform: "translate3d(0, 0, 0)" },
          "100%": { transform: "translate3d(10px, 0, 0)" },
        },
      },
      animation: {
        translate3d: "translate3d 0.3s ease-in-out",
      },
    },
  },
  plugins: [],
};
