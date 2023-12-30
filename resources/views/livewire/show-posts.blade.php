<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>All Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
            <li>{{ $post->content }}</li>
            <hr>
        @endforeach
    </ul>
</div>
