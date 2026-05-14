<x-site-layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-6">Liste des joueurs</h1>
        
        <a href="{{ route('admin.players.create') }}" class="inline-block mb-6 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
            + Ajouter un joueur
        </a>

        <table class="w-full bg-white shadow rounded">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">Prénom</th>
                    <th class="p-3 text-left">Nom</th>
                    <th class="p-3 text-left">Team</th>
                    <th class="p-3 text-left">Date of birth</th>
                    <th class="p-3 text-left">N° d'affiliation</th>
                    <th class="p-3 text-left">N°</th>
                    <th class="p-3 text-left">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr class="border-t">
                        
                        <td class="p-3">{{ $player->first_name }}</td>
                        <td class="p-3">{{ $player->last_name }}</td>
                        <td class="p-3">{{ $player->team->name }}</td>
                        <td class="p-3">{{ $player->dob }}</td>
                        <td class="p-3">{{ $player->affiliation }}</td>
                        <td class="p-3">{{ $player->jersey_number }}</td>
                        <td class="p-3">
                            <a href="{{ route('admin.players.edit', $player) }}" class="inline-block bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow hover:bg-red-700 transition">Modifier</a></td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</x-site-layout>