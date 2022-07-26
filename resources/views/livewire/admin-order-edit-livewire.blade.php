
  <div class="w-full max-w-xl center">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
           <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
              Status
            </label>

                  <select wire:model='status' class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"> chose the option
                  <option value="pending">Pending</option>
                  <option value="confirmed">Confirmed</option>
                  <option value="delivered">Delivered</option>
                  <option value="in_transit">In Transit</option>
                  <option value="returned">Returned</option>
                  <option value="canceled">Canceled</option>

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

          <select wire:model='financial_status' class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"> chose the option
                  <option value="paid">Paid</option>
                  <option value="unpaid">Unpaid</option>
                  <option value="partially_paid">Partially Paid</option>
                  <option value="refunded">Refunded</option>

           </select>
        </div>

        <input type="button" wire:click='save()' value="Update">

    <form>
  </div>





