<div>
    <h4>Title: {{$title}}</h4>

    <span>Author: {{$author}}</span>

    <form wire:submit='save'>
        <label for="title">Title:</label>
        <input type="text" wire:model.live='title' class="text-black">
        <button type="submit">Save</button>
    </form>
</div>
