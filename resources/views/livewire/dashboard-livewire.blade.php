<div class="float-right text-white margin-right-50px">
			   
               <a href="{{route('admin.order')}}" class="block p-6 max-w-sm bg-gray-400 rounded-lg border border-gray-600 shadow-md hover:bg-gray-500 dark:bg-gray-500 dark:border-gray-700 dark:hover:bg-gray-500">
                   <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome</h5>
                   <div class="block p-4 max-w-sm bg-blue-600 rounded-lg border border-gray-600 shadow-md hover:bg-blue-700 dark:bg-blue-800 dark:border-gray-700 dark:hover:bg-gray-700">
                       <p class="text-xl">Total Sales Today</p>
                     <!-- @foreach($products as $product)
                     {{$product->name}} was sold {{$quantity[$product->id]}} times<br/>
                               @endforeach -->
           
                    <h1 class="text-xl">Rs  {{$order_total->all_total}}</h1> 
                   </div>
               </a>
           </div>



           <table class="border border-double border-black mx-auto mt-10 w-5/12">
            <thead>
                <tr>
                <th class="border-double border-2 bg-blue-600 border-black text-white">S.N.</th>
                <th class="border-double border-2 bg-blue-600 border-black text-white">Product</th>
                <th class="border-double border-2 bg-blue-600 border-black text-white">Quantity</th>

                </tr>
            </thead>
           <tbody class=" text-center">
               @foreach($products as $product)
                <tr>
                <td class="border-double border-2 border-black">{{$product->id}}</td>
                <td class="border-double border-2 border-black">{{$product->name}}</td>
                <td class="border-double border-2 border-black">{{$quantity[$product->id]}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
                      
           


           













            





    