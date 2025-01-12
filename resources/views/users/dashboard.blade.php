<x-layout>
    <h1>Hello {{ auth()->user()->username }} </h1>

    <div class="card mb-4">
        <h2 class="font-bold mb-4">Create a new post</h2>
        {{-- Session Messages --}}
        @if (session('success'))
            <div>
                <p> {{ session('success') }} </p>
            </div>
        @endif
        <form action=" {{ route('posts.store') }} " method="POST">
            @csrf
            {{-- Post Title --}}
            <div class="mb-4">
                <label for="title">Post Title</label>
                <input type="text" name="title" placeholder="Post" class="input @error('title') ring-red-500 @enderror"
                    value="{{ old('email') }}">
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Post Body --}}

            <div class="mb-4">
                <label for="body">Post Body</label>
                <textarea name="body" class="input @error('body') ring-red-500 @enderror" cols="30" rows="5"></textarea>
                <button class="btn">Create</button>
            </div>
        </form>
    </div>
</x-layout>
