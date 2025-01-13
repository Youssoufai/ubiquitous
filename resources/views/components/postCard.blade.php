@props(['post', 'full' => false])
<div class="card">
    <h2 class="font-bold text-xl">
        {{ $post->title }}
    </h2>
    <div class="text-xs font-light mb-4">
        <span>Posted {{ $post->created_at->diffForHumans() }} </span>
        <a href="" class="text-blue-500 font-medium">Username</a>
    </div>

    {{-- Body --}}

    @if ($full)
        <div class="text-sm">
            <p> {{ Str::words($post->body, 15) }} </p>
        </div>
    @else
    @endif

    <div class="flex items-center justify-end gap-4 mt-6">
        {{ $slot }}
        <form action="" method="POST">

        </form>
    </div>

    {{--    <div class="text-sm">
        <p> {{ Str::words($post->body, 15) }} </p>
        <a href="{{ route('posts.show', $post) }}" class="text-blue-500 ml-2">Read More &rarr;</a>
    </div> --}}
</div>
