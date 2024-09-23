@props(['name'])

<input type="text" name="{{ $name }}" {{ $attributes }}>
@error($name)
    <span class="text-red-500 block">{{$message}}</span>
@enderror