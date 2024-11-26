<div class="mx-auto w-1/2 mb-4">
    <div class="mb-3 flex justify-between items-center " >
        <a
             href="/dashboard/articles/create" 
             class="text-blue-500  hover:text-blue-700 "
             wire:navigate
             >
            Create a new article
        </a>
       
        <div>
            <button @class([
                'text-gray-200 p-2 bg-blue-700 hover:bg-blue-900 rounded-sm',
                'bg-gray-700' => $showOnlyPublished,
                'bg-blue-700' =>!$showOnlyPublished,
            ])
            wire:click="togglePublished(false)">
                Show All
            </button>
            <button @class([
                'text-gray-200 p-2 bg-blue-700 hover:bg-blue-900 rounded-sm',
                'bg-blue-700' => $showOnlyPublished,
                'bg-gray-700' =>!$showOnlyPublished,
            ])

            wire:click="togglePublished(true)">
                Show Published(<livewire:published-count placeholder-text="loading"/>)
            </button>
        </div>
        
       
    </div>
    <div class="my-3">
        {{ $this->articles->links() }}
    </div>
    <table class="w-full">
        <thread class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr class="text-xs uppercase bg-gray-700 text-gray-400">

                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Content</th>

            </tr>
        </thread>
        <tbody>
            @foreach ($this->articles as $article)
                <tr wire:key="{{ $article->id }}" class="border-b bg-gray-800 border-gray-700 text-white">
                    <td class=" px-6 py-3">{{ $article->title }}</td>
                    <td class="px-6 py-3">
                        <a class="text-gray-200 p-2 "
                        href="/dashboard/articles/{{ $article->id }}/edit"
                       wire:navigate
                        >
                            Edit
                    </a>
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
    <div class="mt-3">
        {{ $this->articles->links() }}
    </div>


</div>
