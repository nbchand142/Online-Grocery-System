
  <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
           <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
              Status
            </label>
               <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status" type="text" wire:model="status">
      </div>
      <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="order_note">
             Order Note
          </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="order_note" type="text" wire:model="order_note">
      </div>
      <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="financial_status">
            Financial Status
          </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="financial_status" type="text" wire:model="financial_status">
      </div>
   
        <input type="button" wire:click='save()' value="Update">

    <form>
  </div>




    
