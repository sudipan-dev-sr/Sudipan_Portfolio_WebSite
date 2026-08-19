/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.{php,html,js}",
        "./includes/**/*.{php,html,js}",
        "./pages/**/*.{php,html,js}"
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                'auto': 'repeat(auto-fit, minmax(240px, 1fr))',
                'cards': 'repeat(auto-fit, minmax(300px, 1fr))'
            },
            fontFamily: {
                Outfit: ["Outfit", "sans-serif"],
                Ovo: ["Ovo", "serif"],
                Inter: ["Inter", "sans-serif"]
            },
            animation: {
                'spin_slow': 'spin 10s linear infinite',
                'pulse_slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'float': 'float 4s ease-in-out infinite',
                'gradient': 'gradient 8s ease infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                gradient: {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                }
            },
            colors: {
                lightHover: '#f8fafc',
                darkHover: '#1e1b4b',
                darkTheme: '#0B0F17',
                darkCard: '#111827',
                darkBorder: '#1f2937',
                primary: {
                    50: '#f5f3ff',
                    100: '#ede9fe',
                    500: '#8b5cf6',
                    600: '#7c3aed',
                    700: '#6d28d9',
                },
                accent: {
                    purple: '#9333ea',
                    cyan: '#06b6d4',
                    amber: '#f59e0b',
                    emerald: '#10b981',
                }
            },
            boxShadow: {
                'black': '4px 4px 0 #000',
                'white': '4px 4px 0 #fff',
                'glow': '0 0 25px -5px rgba(124, 58, 237, 0.3)',
                'glow-cyan': '0 0 25px -5px rgba(6, 182, 212, 0.3)',
                'glow-emerald': '0 0 20px -3px rgba(16, 185, 129, 0.4)',
                'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.07)',
            }
        },
    },
    darkMode: 'class',
    plugins: [],
}