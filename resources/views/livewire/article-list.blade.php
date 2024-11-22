<div class="mx-auto w-1/2 mb-4">
    <table>
        <thread class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>

                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Content</th>

            </tr>
        </thread>
        <tbody>
            @foreach ($articles as $article)
                <tr wire:key="{{ $article->id }}" class="border-b bg-gray-800 border-gray-700 text-white">
                    <td class=" px-6 py-3">{{ $article->title }}</td>
                    <td class="px-6 py-3">
                    <button class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-md"
                    wire:click="delete({{ $article->id }})"
                    wire:confirm="Are you sure you want to delete this article ?"
                    >
                        Delete
                    </button>
                    </td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
