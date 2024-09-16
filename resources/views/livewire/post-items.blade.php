<div>
    @foreach ($posts as $post)
        <div wire:key="{{$post['id']}}">
            {{$post['title']}}
        </div>
    @endforeach
</div>