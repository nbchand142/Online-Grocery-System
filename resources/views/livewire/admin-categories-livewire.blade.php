<div>
      <x-slot name="header">
            <div class="flex justify-between"
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 {{ __('categories') }}
            </h2>
            <a href="{{route('admin.category.add')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Category</a>
          </div>
      </x-slot>
     <center>
        <table class="border-double border border-slate-400 ...">
            <thead>
                <tr>
                
                <th class="border bg-blue-100 border-slate-500 ...">Category Name</th>
                <th class="border bg-blue-100 border-slate-500 ..." colspan="2">Action</th>

                </tr>
                </thead>
                    <tbody>
                @foreach ($all_categories as $category)
                <tr>
                <th class="border border-slate-300 ...">{{$category->name}}</th>
                <th class="border border-slate-300 ...">Deactivate </th>
                <th class="border border-slate-300 ..."> <a href="{{route("admin.category.edit",$category->id)}}">Edit</a></th>

                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</div>