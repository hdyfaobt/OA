<x-site-layout>
    {{-- Conteneur centré, prend toute la hauteur restante --}}
    <div class="min-h-[calc(100vh-72px)] flex items-center justify-center bg-gray-50 px-4 py-12">

        {{-- La "carte" du form --}}
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            {{-- Bandeau titre --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-red-600">Olympic Anderlecht</h1>
                <p class="text-gray-500 text-sm mt-2">Connecte-toi à ton espace</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse e-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        placeholder="ton.mail@example.be"
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

                {{-- Remember + forgot --}}
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-gray-600">
                        <input type="checkbox" name="remember" class="rounded text-red-600 focus:ring-red-500">
                        Se souvenir de moi
                    </label>
                    <a href="{{ route('password.request') }}" class="text-red-600 hover:underline">Mot de passe oublié ?</a>
                </div>

                {{-- Bouton --}}
                <button type="submit"
                    class="w-full bg-red-600 text-white font-semibold py-2.5 rounded-lg hover:bg-red-700 transition">
                    Se connecter
                </button>
            </form>

            {{-- Lien vers register --}}
            <p class="text-center text-sm text-gray-600 mt-6">
                Pas encore de compte ?
                <a href="{{ route('register') }}" class="text-red-600 font-medium hover:underline">S'inscrire</a>
            </p>

        </div>
    </div>
</x-site-layout>