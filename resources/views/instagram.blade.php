<x-app-layout>
    <x-slot name="header">
        <div>
            @if ($datas->count() < 10)
                {{ Str::ucfirst(__('app.last_post')) }} " <span class="header__profile-name">{{Str::upper($profile->username)}} </span>"
            @else
                {{ $profile->username . __('10 last posts') }}
            @endif
        </div>
    </x-slot>
    <div class="instagram-wrapper">
        @foreach ($datas as $data)
            <a href="{{ $data->permalink }}" target="_blank">
                <img src="{{ $data->url }}" alt="">
            </a>
        @endforeach
    </div>
</x-app-layout>
