<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    <center>
<div class="w-full max-w-xs">
        <form class="bg-blue shadow-md rounded px-8 pt-6 pb-8 mb-4">

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_id">
            Category Name
             </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="name" placeholder="enter category name">
     </div>

            <input type="button" wire:click='save()' value="Update">


        </form>
    </div> </center>
</div>

