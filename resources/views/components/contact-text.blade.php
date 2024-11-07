@props(['theme' => 'classic', 'contacts' => []])
<div class="contact contact__{{ $theme }}">
    @forelse($contacts as $key=>$elem)
        <div class="elem elem__{{ $theme }}">
            @if($key === 'fio') <h2 class="elem__text elem"> @else
                    <a class="elem elem__item {{ $key }}"
                       href="@if($key === 'tel' || $key === 'malito'){{$key}}:{{ $elem }} @else {{ $elem }} @endif"
                       target="_blank" rel="noopener" previewlistener="true">
            @endif
                @if($key === 'vk' || $key === 'tg'){{ $key }}@else{{ $elem }}@endif
            @if($key === 'fio') </h2> @else </a>@endif
        </div>
    @empty
        Пусто
    @endforelse
</div>
