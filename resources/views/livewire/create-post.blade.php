<div>
    <h4>Title: {{$title}} {{$content}}</h4>

    <span>Author: {{$author}}</span>

    <form class="flex flex-col gap-y-4" wire:submit='save'>
        <div>
            <label for="title" class="block">Title</label>
            <input type="text" wire:model.live='title' class="border-2 p-4 w-6/12">
        </div>
        <div>
            <input type="text" wire:model.live='content' placeholder="Content..." class="border-2 p-4 w-6/12">
        </div>
        
        <button type="submit" class="border-2 p-4 w-1/12 bg-green-500">Save</button>
    </form>
</div>
