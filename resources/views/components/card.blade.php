@props(['title', 'actions'])
<div class="card bg-base-100 w-96 shadow-2xl mx-4">
    <div class="card-body gap-6">
        <div class="card-title">{{ $title }}</div>

        {{ $slot }}

        <div {{ $attributes->class(['card-actions flex items-center justify-between']) }}>
            {{ $actions }}
        </div>
    </div>

</div>
