@props(['post'])
<div class="card">
    <h2 class="font-bold text-xl">
        {{ $post->title }}
    </h2>
    <div class="text-xs font-light mb-4">
        <span>Posted {{ $post->created_at->diffForHumans() }} </span>
        <a href="" class="text-blue-500 font-medium">Username</a>
    </div>
    <div class="text-sm">
        <p> {{ Str::words($post->body, 15) }} </p>
    </div>
</div>
