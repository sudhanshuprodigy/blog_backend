<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Read Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-4">
            <a href="{{route('posts.index')}}"
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-gray-100 rounded shadow ripple hover:shadow-lg hover:bg-gray-200 focus:outline-none"
            >
            Back to blog
            </a>
        </div>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-12 items-center justify-center flex-col">
                <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$post->title}}</h1>
                    <div class="">
                    <span class="font-semibold title-font text-gray-700">Published</span>
                    <span class="mt-1 text-gray-500 text-sm">{{$post->created_at->diffForHumans()}}</span> ,
                    <span class="font-semibold title-font text-gray-700">Updated</span>
                    <span class="mt-1 text-gray-500 text-sm">{{$post->updated_at->diffForHumans()}}</span>
                    </div>
                <div class="my-6 py-12">
                    <p class="mb-8 leading-relaxed">{!!$post->body!!}</p>
                </div>
                </div>
            </div>
        </section>
        </div>
    </div>
</x-app-layout>