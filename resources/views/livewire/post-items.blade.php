<div>
    <div>
        POSTS
    </div>
    @foreach ($posts as $post)
        <div wire:key="{{$post['id']}}">
            {{$post['title']}} <a href="{{route('posts.edit', $post['id'])}}" class="text-blue-500">
                 edit
            </a>
        </div>
    @endforeach
</div>