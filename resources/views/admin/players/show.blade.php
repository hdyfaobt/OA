<x-site-layout>
    <div class="p-8 max-w-2xl">
        <a href="{{ route('admin.players.index') }}" class="text-blue-600 hover:underline">← Retour à la liste</a>

        <div class="bg-white shadow rounded p-6 mt-4">
            <h1 class="text-3xl font-bold mb-4">
                {{ $player->first_name }} {{ $player->last_name }}
            </h1>

            <dl class="grid grid-cols-2 gap-4">
                <div>
                    <dt class="text-gray-500 text-sm">Numéro</dt>
                    <dd class="font-semibold">#{{ $player->jersey_number }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 text-sm">Numero d'affiliation</dt>
                    <dd class="font-semibold">{{ $player->affiliation }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 text-sm">Date de naissance</dt>
                    <dd class="font-semibold">{{ $player->dob }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 text-sm">Équipe</dt>
                    <dd class="font-semibold">{{ $player->team->name }}</dd>    
                </div>
            </dl>
        </div>
    </div>
</x-site-layout>