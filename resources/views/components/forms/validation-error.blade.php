@error($field, $bag)
    <span {{ $attributes->merge(['class' => 'invalid-feedback']) }} role="alert">
        @if ($slot->isEmpty())
            <strong>{{ $message }}</strong>
        @else
            {{ $slot }}
        @endif
    </span>
@enderror
