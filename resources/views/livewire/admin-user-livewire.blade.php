<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    @foreach($all_users as $user)
        {{$user->name}}
    @endforeach
</div>
