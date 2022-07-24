<div>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <center>
   <div class="w-full max-w-xs">
        <form class="bg-blue shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
             Name
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="name"  placeholder="enter name">
            </div>
            <input type="file" multiple wire:model='images'>

            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Category_id">
            Category_id
             </label>


             <select wire:model="category_id">
                <option>Please select category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Price Rs
             </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text"  wire:model="price"  placeholder="enter price">
            </div>
            <div class="mb-6">
             <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Description
            </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="description" placeholder="enter description">

            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
            Stock
             </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="stock" placeholder="enter stock">

            </div>
            <input type="button" wire:click='save()' value="Update">


        </form>
    </div> </center>
</div>


