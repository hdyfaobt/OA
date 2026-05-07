<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Club de Foot</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href='/'>Olympic Anderlecht</a>
        <div>
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white px-3">Accueil</a>
            <a href="{{ route('team') }}" class="text-gray-300 hover:text-white px-3">L'équipe</a>
        </div>
    </div>
</nav>
    {{ $slot }}
</body>
</html>