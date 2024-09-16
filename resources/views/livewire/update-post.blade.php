<div>
    <div>
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif
    </div>
    <form class="flex flex-col gap-y-4" wire:submit='update'>
        <div>
            <label for="title" class="block">Title</label>
            <input type="text" wire:model.live='title' class="border-2 p-4 w-6/12">
        </div>
        <div>
            <input type="text" wire:model.live='content' placeholder="Content..." class="border-2 p-4 w-6/12">
        </div>
        
        <button type="submit" class="border-2 p-4 w-1/12 bg-green-500">Update</button>
    </form>
</div>
