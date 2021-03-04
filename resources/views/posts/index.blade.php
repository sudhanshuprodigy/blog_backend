<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-4">
            <a href="{{route('posts.create')}}"
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-gray-100 rounded shadow ripple hover:shadow-lg hover:bg-gray-200 focus:outline-none"
            >
            Add New Post
            </a>
        </div>
        @if (session('message'))
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-pink-500" id="box">
            <span class="inline-block align-middle mr-8">
                <b class="capitalize">Yolla!</b> {{session('message')}}
            </span>
            <button onclick="document.getElementById('box').hidden=true" class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                <span>×</span>
            </button>
        </div>
        @endif
        @empty($posts[0])
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    No Posts Found
                </div>
            </div>
        @else
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-16 mx-auto">
                <div class="-my-8 divide-y-2 divide-gray-100">
                @foreach($posts as $post)
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-gray-700">Published</span>
                    <span class="mt-1 text-gray-500 text-sm">{{$post->created_at->diffForHumans()}}</span>
                    <span class="font-semibold title-font text-gray-700">Updated</span>
                    <span class="mt-1 text-gray-500 text-sm">{{$post->updated_at->diffForHumans()}}</span>
                    </div>
                    <div class="md:flex-grow">
                    <a href="{{route('posts.show',$post->id)}}"><h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{$post->title}}</h2></a>
                    <p class="leading-relaxed">{!!$post->body!!}</p>
                    <a class="text-indigo-500 inline-flex items-center mt-4" href="{{route('posts.edit',$post->id)}}">Update</a>
                    <form action="{{route('posts.destroy',$post->id)}}" onsubmit='return confirm("Are you sure?")' method="POST">
                        @method('delete')
                        @csrf
                        <button class="text-indigo-500 inline-flex items-center mt-4">Delete</button>
                    </form>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </section>
       @endempty

       {{$posts->links()}}
        </div>
    </div>
</x-app-layout>