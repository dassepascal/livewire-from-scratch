<div>
    {{-- <div>
        {{ $greeting }}, {{ $name }} !
    </div> --}}

    <form 
        wire:submit="changeName"
        >
    
        <div class="mt-2">
            <select 
        
            type="text" 
            class=" p-4 border rounded-md bg-gray-700 text-black"
            wire:model.fill="greeting"
            >
                <option value="Hello">Hello</option>
                <option value="Goodbye">Goodbye</option>    
                <option value="Welcome">Welcome</option>
                <option value="Bye">Bye</option>

            </select>
            <input 
                type="text"
                class=" p-4 border rounded-md bg-gray-700 text-black"
                wire:model="name"
                
                >
        
    
        </div>
        <div class="mt-2">
            <button 
                type="submit"
                class="text-white font-medium rounded-md bg-indigo-600 hover:bg-indigo-500 px-4 py-2"
                wire:click="changeName(document.getElementById('newName').value)">
                Greeter
            </button>
    
        </div>
        
    </form>
    @if($name !== '')
    <div>
        {{ $greeting}}, {{ $name }}!
    </div>
    @endif
</div>
