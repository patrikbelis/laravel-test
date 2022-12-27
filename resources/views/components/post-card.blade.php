@props(['post'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $post->author }} </div>
            <x-post-tags :tagsCsv='$post->tags' />
        </div>
    </div>
</x-card>