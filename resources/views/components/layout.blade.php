<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get2Work</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts,googleapis.com/css?family=Hanken+Grotesk:wgh@400;500;600$display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#060606]  text-white font-mono pt-3 pb-20 px-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            @guest
                <x-logo link="/"/>
            @endguest
            @auth
                <x-logo link="/jobs" />
            @endauth
            <div class="space-x-6 font-bold">
                <a href="#" class="hover:text-blue-600 transition-colors duration-300">Jobs</a>
                <a href="#" class="hover:text-blue-600 transition-colors duration-300">Careers</a>
                <a href="#" class="hover:text-blue-600 transition-colors duration-300">Salaries</a>
                <a href="#" class="hover:text-blue-600 transition-colors duration-300">Companies</a>      </div>
            {{-- Authorized Users --}}
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create" class="hover:text-blue-400 transition-colors duration-300">Post a Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button class="hover:text-blue-400 transition-colors duration-300 cursor-pointer">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register" class="hover:text-blue-600 transition-colors duration-300">Sign Up</a>
                    <a href="/login" class="hover:text-blue-600 transition-colors duration-300">Log In</a>
                </div>
            @endguest

            
        </nav>

        <main class="mt-10 max-w[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>