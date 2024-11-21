<div>
    {{-- <div>
        {{ $greeting }}, {{ $name }} !
    </div> --}}

    <form 
        wire:submit="changeGreeting()"
        >
    
        <div class="mt-2">
            <select 
        
            type="text" 
            class=" p-4 border rounded-md bg-gray-700 text-white"
            wire:model.fill="greeting"
            >
                @foreach ($greetings as $greeting)
                    <option value="{{$greeting->greeting}}">{{$greeting->greeting}}</option>)
                    
                @endforeach
            </select>
            <input 
                type="text"
                class=" p-4 border rounded-md bg-gray-700 text-white"
                wire:model="name"
                
                >
            
        </div>
        <div>
            @error('name')
                <p class="text-red-600">{{ $message }}</p>
                
            @enderror
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
    @if($greetingMessage !== '')
    <div>
        {{ $greetingMessage}}
    </div>
    @endif
</div>
