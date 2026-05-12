/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './app/Views/**/*.php',
        './public/assets/js/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                display: ['Montserrat', 'sans-serif'],
            },
            colors: {
                navy: {
                    50: '#f0f4f8',
                    100: '#d9e2ec',
                    200: '#bcccdc',
                    300: '#9fb3c8',
                    400: '#829ab1',
                    500: '#627d98',
                    600: '#486581',
                    700: '#334e68',
                    800: '#243b53',
                    900: '#002147',
                    950: '#00142b',
                },
                maritime: {
                    300: '#6ab0ff',
                    500: '#0056b3',
                    600: '#004494',
                },
                surface: '#f7f9ff',
            },
            backgroundImage: {
                'hero-pattern': "linear-gradient(to right bottom, rgba(0, 33, 71, 0.7), rgba(0, 20, 43, 0.85)), url('/assets/images/hero_bg.png')",
                'glass-gradient': 'linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%)',
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'float': 'float 6s ease-in-out infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/container-queries'),
    ],
}
