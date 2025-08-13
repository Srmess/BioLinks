@props(['name', 'prefix' => null])

<label class='w-full input'>
    @if ($prefix)
        <span>{{ $prefix }}</span>
    @endif
    <input {{ $attributes->class(['grow']) }} name="{{ $name }}" />
</label>
@error($name)
    <span class="text-sm text-error">{{ $message }}</span>
@enderror
