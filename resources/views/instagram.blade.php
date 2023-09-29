<x-app-layout>
    <x-slot name="header">
        <div>
            @if ($datas->count() < 10)
                {{ Str::ucfirst($profile->username) }} <span> {{ __('last posts') }} </span>
            @else
                {{ $profile->username . __('10 last posts') }}
            @endif
        </div>
    </x-slot>
    <div class="instagram-wrapper">
        @foreach ($datas as $data)
            <img src="{{ $data->url }}" alt="">
        @endforeach
    </div>
</x-app-layout>
