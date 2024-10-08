<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "500": "#FF6B6B",  // Vibrant red
                        },
                        secondary: {
                            "500": "#FFD93D",  // Bright yellow
                        },
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <style>
        @keyframes move-bg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animated-bg {
            background: linear-gradient(270deg, #FF6B6B, #FFD93D);
            background-size: 400% 400%;
            animation: move-bg 5s ease infinite; /* Durasi diubah menjadi 5 detik */
        }
    </style>
</head>
<body class="animated-bg min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <main class="flex flex-col items-center justify-center w-full max-w-md bg-white rounded-2xl shadow-xl transition-transform transform hover:scale-105">
        <div class="p-6 space-y-6 sm:p-8">
            <h1 class="text-3xl font-bold text-center text-gray-900 mb-4">
                <span class="inline-flex items-center">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M10 0C4.48 0 0 4.48 0 10c0 5.52 4.48 10 10 10s10-4.48 10-10S15.52 0 10 0zm0 18C5.58 18 2 14.42 2 10S5.58 2 10 2s8 3.58 8 8-3.58 8-8 8z"/>
                        <path d="M10 4a1 1 0 00-.117 1.993L10 6a4 4 0 100 8 1 1 0 000-2 2 2 0 110-4 1 1 0 000-2z"/>
                    </svg>
                    <span class="ml-2">Login Petugas</span>
                </span>
            </h1>
            <form class="space-y-6" action="proses_login.php" method="post" aria-label="Login Form">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <div class="relative">
                        <input type="text" name="username" id="username" class="w-full p-3 pl-10 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300" placeholder="Enter your username" required>
                        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M10 2a8 8 0 00-8 8 7.999 7.999 0 0014.35 5.416A6.985 6.985 0 0014 10a8 8 0 00-4-8zm0 10a4 4 0 110-8 4 4 0 010 8z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" class="w-full p-3 pl-10 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300" placeholder="••••••••" required>
                        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M10 2a6 6 0 00-6 6v4a6 6 0 0012 0v-4a6 6 0 00-6-6z"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-primary-500" aria-labelledby="remember-label">
                        </div>
                        <label id="remember-label" for="remember" class="ml-2 text-sm font-medium text-gray-500">Remember me</label>
                    </div>
                    <a href="#" class="text-sm font-medium text-primary-500 hover:underline">Forgot password?</a>
                </div>
                <button type="submit" name="login" class="w-full text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 transition duration-300 ease-in-out transform hover:scale-105">
                    Sign in
                </button>
                <p class="text-sm font-light text-center text-gray-500">
                    Don’t have an account? <a href="register.php" class="font-medium text-primary-500 hover:underline">Sign up</a>
                </p>
            </form>
        </div>
    </main>
    <footer class="text-center mt-10">
    </footer>
</body>
</html>
