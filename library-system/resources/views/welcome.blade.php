<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])

    <style>
        body {
            background-image: url('{{ asset("images/barrow.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-900 text-white">
    <div class="min-h-screen flex flex-col items-center justify-center text-center bg-black bg-opacity-50">
        
        <!-- Logo -->
        <div class="mb-6">
            <svg class="h-16 w-16 text-red-500" fill="currentColor" viewBox="0 0 64 64">
                <path d="M61.8548 14.6253C61.8778 14.7102..."></path>
            </svg>
        </div>

        <!-- Welcome Text -->
        <h1 class="text-4xl font-bold text-white drop-shadow-lg">Welcome to the Library</h1>
        <p class="mt-3 text-lg text-gray-200">You can manage your library and human resources </p>

        <!-- Navigation Buttons -->
        <div class="mt-6 flex gap-4">
            <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Log In
            </a>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                Register
            </a>
        </div>

        <!-- Footer -->
        <footer class="mt-12 text-gray-400 text-sm">
            &copy; {{ date('Y') }} Library Management System. All Rights Reserved.
        </footer>
    </div>
</body>
</html>
