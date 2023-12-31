<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="savePost">
        <label for="title">Title:</label>
        <input type="text" wire:model.live='title' placeholder="Title">
        @error('title')
            <span class="error">
                {{ $message }}
            </span>
        @enderror
        <label for="content">Content:</label>
        <textarea wire:model.live="content" placeholder="Content"></textarea>
        @error('content')
            <span class="error">
                {{ $message }}
            </span>
        @enderror
        <button type="submit">Save Post</button>
    </form>
</div>
