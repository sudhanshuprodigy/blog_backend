@extends('welcome')

@section('content')

    <div class="max-w-2xl px-8 py-4 my-16 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <a href="{{route('home.index')}}" class="text-blue-600 dark:text-blue-400 hover:underline">Back To Blog</a>
    </div>

    <div class="max-w-2xl px-8 py-4 my-16 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-between">
            <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{$post->created_at->format('D M Y')}}</span>
        </div>

        <div class="mt-2">
            <h3 class="text-4xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">{{$post->title}}</h3>
            <p class="mt-2 text-gray-600 dark:text-gray-300">{!!$post->body!!}</p>
        </div>
    </div>

@endsection