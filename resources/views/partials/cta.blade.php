@php
    $cta_menu = config("menus.cta_menu");
@endphp

<div class="cta">
    <div class="gp-container">
        <ul class="mb-0 ps-0">
            @foreach ($cta_menu as $menu_item)
            <li>
                <div class="icon">
                    <img src="{{ Vite::asset('resources/img/'.$menu_item["icon"]) }}">
                </div>
                <a class="fs-md fw-regular" href="{{ $menu_item["href"] }}">{{ $menu_item["text"] }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
