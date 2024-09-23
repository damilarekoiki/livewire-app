<div>
    <div>
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif
    </div>
    <form class="flex flex-col gap-y-4 pb-4" wire:submit>
        <div>
            <label for="tags" class="block">Tags</label>
            <input type="text" wire:model.blur='tags' wire:dirty.class="!outline-yellow-500 !border-yellow-500" class="outline-2 border-2 border-gray-200 outline-gray-200 p-4 w-6/12">
            @error('tags')
                <span class="text-red-500 block">{{$message}}</span>
            @enderror
            
        </div>
        <div wire:dirty wire:target="tags">Unsaved...</div>
    </form>
    <form class="flex flex-col gap-y-4" wire:submit='update'>
        <div>
            <label for="title" class="block">Title</label>
            {{-- .blur updates the field only when we tab out of the field --}}
            <input type="text" wire:model.blur='form.title' class="border-2 p-4 w-6/12">
            @error('form.title')
                <span class="text-red-500 block">{{$message}}</span>
            @enderror
            
        </div>
        

        <div>
            <label for="content" class="block">Content</label>
            <input type="text" wire:model.live='form.content' placeholder="Content..." class="border-2 p-4 w-6/12">
            @error('form.content')
                <span class="text-red-500 block">{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="border-2 p-4 w-1/12 bg-green-500">Update</button>

        <div wire:loading>
            Sending
        </div>
    </form>
</div>
