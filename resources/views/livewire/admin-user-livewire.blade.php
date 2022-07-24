<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>

    </x-slot>
    <table class="border border-double border-black mx-auto mt-10 w-6/12">
        <thead>
            <tr>
                <th class="border-double border-2 bg-blue-600 border-black text-white ..."> S.N.</th>
                <th class="border-double border-2 bg-blue-600 border-black text-white ...">Name</th>
                <th class="border-double border-2 bg-blue-600 border-black text-white ..." colspan="2">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($all_users as $user)
                <tr>
                     <td class="border-double border-2 border-black ...">{{$user->id}}</td>
                    <td class="border-double border-2 border-black ...">{{$user->name}}</td>
                    <td class="border-double border-2 border-black"> <a class="text-white bg-green-600 hover:bg-blue-800 rounded-lg text-l px-5 py-0.5 dark:bg-green-600 dark:hover:bg-blue-700" href="{{route("admin.user.edit",$user->id)}}">Edit</a></th>
                    <td class="border-double border-2 border-black ..."> <a class="text-white bg-red-700 hover:bg-red-800 rounded-lg text-l px-5 py-0.5 dark:bg-red-500 dark:hover:bg-red-700" href="">Deactivate</a> </td> 
                </tr>
             @endforeach
         </tbody>
    </table>
</div>
