@props(['theme' => 'classic', 'type' => 'button', 'back' => false])
<button type="{{ $type }}" class="theme-button {{ $theme }}" onclick="{{ $back }}">
    {{ $slot }}
</button>
