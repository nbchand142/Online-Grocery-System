
  <div class="w-full max-w-xl center">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
           <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
              Status
            </label>
                  
                  <select class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"> chose the option
                  <option value="Pending">Pending</option>
                  <option value="Confirmed">Confirmed</option>
                  <option value="Delivered">Delivered</option>
                  <option value="In_Transit">In_Transit</option>
                  <option value="Returned">Returned</option>
                  <option value="Canceled">Canceled</option>

                  </select>
      </div>
      <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="order_note">
             Order Note
          </label>
            <input class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="order_note" type="text" wire:model="order_note">
      </div>
      <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="financial_status">
            Financial Status
          </label>
                
          <select class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"> chose the option
                  <option value="Pending">Paid</option>
                  <option value="Confirmed">Unpaid</option>
                  <option value="Delivered">Partially Paid</option>
                  <option value="Returned">Refunded</option>

           </select>
        </div>
   
        <input type="button" wire:click='save()' value="Update">

    <form>
  </div>




    
