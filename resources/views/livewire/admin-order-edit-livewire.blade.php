<div> <form action="">
    user_id:<input type="text" wire:model="user_id"> <br><br>
    subtotal:<input type="text" wire:model="subtotal"> <br><br>
    delivery_charge:<input type="text" wire:model="delivery_charge"> <br><br>
    tax:<input type="text" wire:model="tax"><br><br>
    discount:<input type="text" wire:model="discount"> <br><br>
    total:<input type="text" wire:model="total"> <br><br>
    status:<input type="text" wire:model="status"> <br><br>
    order_note:<input type="text" wire:model="order_note"> <br><br>
    financial_status:<input type="text" wire:model="financial_status"> <br><br>
    <input type="button" wire:click='save()' value="Update">

    </form>




    <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">
      Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Name" type="text" placeholder="Name">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Category_id">
      Category_id
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="Category_id" type="Category_id" placeholder="******************">

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Price">
      Price
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Price" type="text" placeholder="Price">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Description">
      Description
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="Description" type="Description" placeholder="******************">
      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Stock">
      Stock
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stock" type="text" placeholder="stock">
    </div>
    <input type="button" wire:click='save()' value="Update">

      <form>
</div>




    
