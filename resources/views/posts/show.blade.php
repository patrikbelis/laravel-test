<x-layout>
<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card >
            <div
                class="flex flex-col"
            >
                <h3 class="text-2xl mb-2">{{ $post->title}} </h3>
                <div class="text-xl font-bold mb-4">{{ $post->author }}</div>
                <x-post-tags :tagsCsv='$post->tags' />
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $post->description }}
                        </p>
                    </div>
                </div>
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/posts/{{$post->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </x-card>
    </div>
</x-layout>