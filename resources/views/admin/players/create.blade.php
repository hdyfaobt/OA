<x-site-layout>
    <div class="p-8 max-w-2xl mx-auto">
        <a href="{{ route('admin.players.index') }}" class="text-blue-600 hover:underline">← Retour à la liste</a>

        <div class="bg-white shadow rounded p-6 mt-4">
            <h1 class="text-3xl font-bold mb-6">Ajouter un joueur</h1>

            <form method="POST" action="{{ route('admin.players.store') }}" class="space-y-4">
                @csrf

                {{-- Prénom --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                    @error('first_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Nom --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                    @error('last_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Affiliation --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">N° d'affiliation</label>
                    <input type="text" name="affiliation" value="{{ old('affiliation') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                    @error('affiliation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Numéro de maillot --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Numéro de maillot</label>
                    <input type="number" name="jersey_number" value="{{ old('jersey_number') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                    @error('jersey_number')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Date de naissance --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date de naissance</label>
                    <input type="date" name="dob" value="{{ old('dob') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                    @error('dob')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Équipe (optionnel — auto-calculée si vide) --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Équipe <span class="text-gray-400">(laisse vide pour auto-calcul)</span>
                    </label>
                    <select name="team_id" class="w-full border border-gray-300 rounded px-3 py-2">
                        <option value="">— Auto (selon date de naissance) —</option>
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('team_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                    Ajouter le joueur
                </button>
            </form>
        </div>
    </div>
</x-site-layout>