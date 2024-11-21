<div>
    <div>
        Hello, {{ $name }} !
    </div>

   <form action=""
   wire:submit.prevent="changeName(document.getElementById('newName').value)"
   >
    <div class="mt-4">
        <input 
        id="newName"
        type="text" 
        class="block w-full p-4 border rounded-md bg-gray-700 text-black">
      
 
     </div>
     <div class="mt-4">
         <button 
             type="submit"
             class="text-white font-medium rounded-md bg-indigo-600 hover:bg-indigo-500 px-4 py-2"
             wire:click="changeName(document.getElementById('newName').value)">
             Greeter
         </button>
 
     </div>
   </form>
</div>
