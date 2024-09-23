<div>
    <h4>Title: {{ $form->title }} {{$form->content}}</h4>

    <span>Author: {{$author}}</span>

    <form class="flex flex-col gap-y-4" wire:submit='save'>
        <div>
            <label for="title" class="block">Title</label>
            <x-input-text name="form.title" wire:model.live='form.title' class="border-2 p-4 w-6/12" />
        </div>
        
        
        <div>
            <label for="content" class="block">Content</label>
            <x-input-text name='form.content' placeholder="Content..." class="border-2 p-4 w-6/12" />
        </div>
        
        <button type="submit" class="border-2 p-4 w-1/12 bg-green-500">Save</button>

        <div wire:loading>
            Sending
        </div>
    </form>
</div>
