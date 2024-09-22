<div>
    <h4>Title: {{ $form->title }} {{$form->content}}</h4>

    <span>Author: {{$author}}</span>

    <form class="flex flex-col gap-y-4" wire:submit='save'>
        <div>
            @error('form.title')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="form.title" class="block">Title</label>
            <input type="text" wire:model='form.title' class="border-2 p-4 w-6/12">
        </div>

        <div>
            @error('form.content')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div>
            <input type="text" wire:model.live='form.content' placeholder="Content..." class="border-2 p-4 w-6/12">
        </div>
        
        <button type="submit" class="border-2 p-4 w-1/12 bg-green-500">Save</button>
    </form>
</div>
