<div>
      <x-slot name="header">
            <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 {{ __('Categories') }}
            </h2>
            <a href="{{route('admin.category.add')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Category</a>
          </div>
      </x-slot>

      <table class="border border-double border-black mx-auto mt-10 w-5/12">
            <thead>
                <tr>
                <th class="border-double border-2 bg-blue-600 border-black text-white">S.N.</th>
                <th class="border-double border-2 bg-blue-600 border-black text-white">Category Name</th>
                <th class="border-double border-2 bg-blue-600 border-black text-white" colspan="2">Action</th>

                </tr>
            </thead>
           <tbody class=" text-center">
                @foreach ($all_categories as $category)
                <tr>
                <td class="border-double border-2 border-black">{{$category->id}}</td>
                <td class="border-double border-2 border-black">{{$category->name}}</td>
                <td class="border-double border-2 border-black"> <a class="text-white bg-green-600 hover:bg-blue-800 rounded-lg text-l px-5 py-0.5 dark:bg-green-600 dark:hover:bg-blue-700" href="{{route("admin.category.edit",$category->id)}}">Edit</a></td>
                <td class="border-double border-2 border-black"> <a class="text-white bg-red-700 hover:bg-red-800 rounded-lg text-l px-5 py-0.5 dark:bg-red-500 dark:hover:bg-red-700" href="">Deactivate</a> </td>

                </tr>
                @endforeach
            </tbody>
        </table>

</div>
