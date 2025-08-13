@props(['value', 'name'])

<div>
    <textarea {{ $attributes->class(['w-full textarea']) }} type="textarea">{{ $value }}</textarea>
    @error($name)
        <span class="text-sm text-error">{{ $message }}</span>
    @enderror
</div>
