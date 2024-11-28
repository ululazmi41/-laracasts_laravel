<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Pixel Positions</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo.png">
                </a>
            </div>

            <div class="space-x-6 font-semibold">
                <a href="/jobs">Jobs</a>
                <a href="/careers">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 mx-auto max-w-[986px]">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
