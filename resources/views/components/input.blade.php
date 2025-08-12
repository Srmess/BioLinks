@props(['name'])

<div>
    <input {{ $attributes->class(['w-full input']) }} name="{{ $name }}" />
    @error($name)
        <span class="text-sm text-error">{{ $message }}</span>
    @enderror
</div>
