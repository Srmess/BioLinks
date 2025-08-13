@props(['name'])

<input type="file" {{ $attributes->class(['w-full file-input']) }} name="{{ $name }}" />
@error($name)
    <span class="text-sm text-error">{{ $message }}</span>
@enderror
