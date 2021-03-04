<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-6">
            <a href="{{route('posts.index')}}"
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-gray-100 rounded shadow ripple hover:shadow-lg hover:bg-gray-200 focus:outline-none"
            >
            Back to blog
            </a>
        </div>

        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                
                <div class="lg:w-1/2 md:w-2/3 mx-auto">

                <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                        <input type="text" id="title" name="title" value="{{old('title')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('title') {{$errors->first('title')}}  @enderror
                    </div>
                    </div>
                    
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="body" class="leading-7 text-sm text-gray-600">Body</label>
                        <textarea id="editor" name="body" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                            {{old('body')}}
                        </textarea>
                        @error('body') {{$errors->first('body')}}  @enderror
                    </div>
                    </div>
                    <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Create</button>
                    </div>
                </div>

                </form>

                </div>
            </div>
        </section>
       
        </div>
    </div>
</x-app-layout>