@props(['error'])
<div class="form-outline mb-4">
    <label {{ $attributes }} class="form-label">{{ $name }}</label>
    {{ $slot }}
    @if (!empty($error))
        <span>{{ $error }}</span>
    @endif
</div>
