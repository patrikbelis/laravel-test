<x-layout>
<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Create a post</h2>
        <p class="mb-4">Write something intereseting!</p>
    </header>

    <form method="POST" action="/posts">
        @csrf
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">
                Author:
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="author"
                value="{{old('author')}}"
            />
            @error('author')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">
                Title
                </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Example: Lorem impsum"
                value="{{old('title')}}"
            />
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
             @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Example: Laravel, Backend, Postgres, etc"
                value="{{old('tags')}}"
            />
            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
             @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Include tasks, requirements, salary, etc"
                value="{{old('description')}}"
            ></textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
             @enderror
        </div>
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Create post
            </button>
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>
