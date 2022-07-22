<div>
     <div class="flex justify-between">

     <x-slot name="header">
        
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Financial Status') }}
            </h2>
            
        
        </x-slot>


    
        <div class="w-full max-w-xs">
          <form class="bg-blue shadow-md rounded px-12 pt-12 pb-12 mb-12">
           
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">
            User 
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="user_id"  placeholder="enter user_id">
            </div>


            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="subtotal">
            Sub Total
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="subtotal"  placeholder="enter subtotal">
            </div>


            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="delivery_charge">
            Delivery Charge 
             </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text"  wire:model="delivery_charge"  placeholder="enter delivery_chargeprice">
            </div>


            <div class="mb-6">
             <label class="block text-gray-700 text-sm font-bold mb-2" for="tax">
             Tax
            </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="tax" wire:model="description" placeholder="enter tax">
            </div>

            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="discount">
            Discount
             </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="discount" placeholder="enter discount">
            </div>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="total">
            Total
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="total"  placeholder="enter total">
            </div>


            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
            Status
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="status"  placeholder="enter status">
            </div>


            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="order_note">
            Order Note
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="order_note"  placeholder="enter order_note">
            </div>


            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="financial_status">
            Financial Status
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="financial_status"  placeholder="enter financial_status">
            </div>


            <input type="button" wire:click='save()' value="Update">
        </form>
    </div>

  <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Chack Iteam') }}
            </h2>
            
        </div>
    </x-slot>
    <div class="w-full max-w-xs">
        <form class="bg-blue shadow-md rounded px-12 pt-12 pb-12 mb-12">
           
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">
            User 
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="user_id"  placeholder="enter user_id">
            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_id">
            Product 
            </label>
             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" wire:model="product_id"  placeholder="enter product_id">
            </div>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
            Quantity 
             </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text"  wire:model="quantity"  placeholder="enter quantity">
            </div>


            <div class="mb-6">
             <label class="block text-gray-700 text-sm font-bold mb-2" for="price_per_item">
             Price Per Item
            </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="tax" wire:model="price_per_item" placeholder="enter price_per_item">
            </div>

            <div class="mb-6">
             <label class="block text-gray-700 text-sm font-bold mb-2" for="total">
             Total
            </label>
            <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="tax" wire:model="total" placeholder="total ">
            </div>
            
            <input type="button" wire:click='save()' value="Update">

        </form>
    
    </div>
</div>