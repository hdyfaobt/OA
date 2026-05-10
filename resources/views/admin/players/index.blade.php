<x-site-layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-6">Liste des joueurs</h1>

        <table class="w-full bg-white shadow rounded">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">N°</th>
                    <th class="p-3 text-left">Prénom</th>
                    <th class="p-3 text-left">Nom</th>
                    <th class="p-3 text-left">Position</th>
                    <th class="p-3 text-left">Nationalité</th>
                    <th class="p-3 text-left">Date of birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr class="border-t">
                        <td class="p-3">{{ $player->jersey_number }}</td>
                        <td class="p-3">{{ $player->first_name }}</td>
                        <td class="p-3">{{ $player->last_name }}</td>
                        <td class="p-3">{{ $player->position }}</td>
                        <td class="p-3">{{ $player->nationality }}</td>
                        <td class="p-3">{{ $player->dob }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-site-layout>