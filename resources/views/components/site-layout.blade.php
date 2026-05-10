<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Club de Foot</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-red-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
<a href="/" class="text-white font-bold text-xl">Olympic Anderlecht</a>
        <div>
            <a href="{{ route('home') }}" class="text-white hover:text-gray-200 px-3">Accueil</a>
            <a href="{{ route('team') }}" class="text-white hover:text-gray-200 px-3">Nos équipes</a>
            <a href="{{ route('calendar') }}" class="text-white hover:text-gray-200 px-3">Matchs</a>
            <a href="{{ route('results') }}" class="text-white hover:text-gray-200 px-3">Resultat</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-gray-200 px-3">Contact</a>
            <a href="{{ route('about') }}" class="text-white hover:text-gray-200 px-3">A propos</a>
            
        </div>
    </div>
</nav>
    {{ $slot }}
</body>
</html>