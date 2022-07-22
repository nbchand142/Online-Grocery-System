<center>
<div class="w-full max-w-xs">
    
        <form class="bg-blue shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
             Name
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="name"  placeholder="enter name">
            </div>
<input type="button" wire:click='save()' value="Update">
</form>
</div> </center>
