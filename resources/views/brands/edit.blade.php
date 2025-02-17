@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-4xl text-blue-700">Edit Brands</h2> 
    <hr class="h-1 bg-blue-200">

    <form action="{{route('brands.update',$brands->id)}}" method="POST" class="mt-5">
        @csrf
        <input type="text" placeholder="Brands Name" name="name" class="w-full rounded-lg border-gray-300 my-2" value="{{$brands->name}}">
        @error('name')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror
        <input type="text" placeholder="Priority" name="priority" class="w-full rounded-lg border-gray-300 my-2" value="{{$brands->priority}}">
        @error('priority')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror

        <div class="flex">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Update Brands">

            <a href="{{route('brands.index')}}" class="bg-red-600 text-white px-10 py-2 mx-2 rounded-lg">Exit</a>
        </div>
    </form>

@endsection
