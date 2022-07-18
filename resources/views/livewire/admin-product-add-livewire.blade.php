<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="col-lg-6 ">

<center>
    Name: <input type="text" wire:model="name" ><br>
    Category_id: <input type="text" wire:model="category_id" ><br>
    Price: <input type="text" wire:model="price" ><br>
    Description: <input type="text" wire:model="description" ><br>
    Stock: <input type="text" wire:model="stock" ><br>
    <input type="button" wire:click='save()' value="Add">
</center>
</div>
</div>

