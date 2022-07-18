<div>
name:<input type="text"name="name"><br><br>


<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    @foreach ($all_categories as $categories)
        {{$categories->name}}
    @endforeach
</div>
