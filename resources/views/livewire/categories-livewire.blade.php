<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('categories') }}
        </h2>
    </x-slot>
    @foreach($all_categories as $category)
        {{$category->name}}
    @endforeach
</div>
