<x-site-layout>
    {{-- Conteneur centré --}}
    <div class="min-h-[calc(100vh-72px)] flex items-center justify-center bg-gray-50 px-4 py-12">

        {{-- Carte du form --}}
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            {{-- Bandeau titre --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-red-600">Olympic Anderlecht</h1>
                <p class="text-gray-500 text-sm mt-2">Crée ton compte supporter</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                {{-- Nom --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        placeholder="Prénom Nom"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse e-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        placeholder="ton.email@exemple.be"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirmation du password --}}
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        placeholder="••••••••"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>

                {{-- Bouton --}}
                <button type="submit"
                    class="w-full bg-red-600 text-white font-semibold py-2.5 rounded-lg hover:bg-red-700 transition">
                    Créer mon compte
                </button>
            </form>

            {{-- Lien vers login --}}
            <p class="text-center text-sm text-gray-600 mt-6">
                Tu as déjà un compte ?
                <a href="{{ route('login') }}" class="text-red-600 font-medium hover:underline">Se connecter</a>
            </p>

        </div>
    </div>
</x-site-layout>