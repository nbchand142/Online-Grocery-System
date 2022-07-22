<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>

    </x-slot>
    <table class="border-double border border-slate-400 ...">
        <thead>
            <tr>
                <th class="border bg-blue-400 border-slate-500 ..."> S.N.</th>
                <th class="border bg-blue-400 border-slate-500 ...">Name</th>
                <th class="border bg-blue-400 border-slate-500 ..." colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_users as $user)
                <tr>
                     <td class="border border-slate-300 ...">{{$user->id}}</td>
                    <td class="border border-slate-300 ...">{{$user->name}}</td>
                    <td class="border border-slate-300 ...">Deactivate </td>
                    <td class="border border-slate-300 ..."> <a href="{{route("admin.user.edit",$user->id)}}">Edit</a></th>
                </tr>
             @endforeach
         </tbody>
    </table>
</div>
