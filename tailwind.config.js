/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    // darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ["Montserrat", "Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                main: "#FDFDFD",
                accent_wine: {
                    DEFAULT: "#67375C",
                    80: "rgba(83, 42, 74, 0.8)",
                    50: "rgba(83, 42, 74, 0.5)",
                },
                section_title: "#909090",
                article_title: "#242424",
                box_color: "#F5F5F5",
                red: {
                    900: "#b71c1c",
                    "accent-100": "#ff8a80",
                    "accent-200": "#ff5252",
                    "accent-400": "#ff1744",
                    "accent-700": "#d50000",
                },
                gray: {
                    50: "#fafafa",
                    100: "#f5f5f5",
                    200: "#eeeeee",
                    300: "#e0e0e0",
                    400: "#bdbdbd",
                    500: "#9e9e9e",
                    600: "#757575",
                    700: "#616161",
                    800: "#424242",
                    900: "#212121",
                },
            },
            spacing: {
                7: "1.75rem",
                9: "2.25rem",
                28: "7rem",
                80: "20rem",
                96: "24rem",
            },
            height: {
                "1/2": "50%",
            },
            scale: {
                30: ".3",
            },
            boxShadow: {
                outline: "0 0 0 2px rgba(83, 42, 74, 0.5)",
            },
        },
    },
    variants: {
        scale: ["responsive", "hover", "focus", "group-hover"],
        textColor: ["responsive", "hover", "focus", "group-hover"],
        opacity: ["responsive", "hover", "focus", "group-hover"],
        backgroundColor: ["responsive", "hover", "focus", "group-hover"],
    },
    plugins: [
        // require('@tailwindcss/forms'),
    ],
};
