@php
    $footer_menus = config("menus.footer_menus");
    $social_menu = config("menus.social_menu");
@endphp

<footer>

    <div class="top">
        <div class="gp-container">
            @foreach ($footer_menus as $key=>$menu)
            <div class="gp-col">
                <h4 class="fs-lg">{{ $key }}</h4>
                <ul class="mb-0 ps-0">
                    @foreach ($menu as $menu_item)
                    <li>
                        <a href="{{ route($menu_item["name"]) }}" class="fs-sm fw-light">{{ $menu_item["text"] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach

          <div class="logo-bg">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}">
          </div>

        </div>
      </div>

      <div class="bottom">
        <div class="gp-container">
            <button class="sign-up fs-md fw-semibold">Sign-Up Now!</button>
            <div class="socials">
                <h3 class="fs-xl mb-0">Follow Us</h3>
                <ul class="mb-0 ps-0">
                    @foreach ($social_menu as $menu_item)
                    <li>
                        <a href="{{ $menu_item["href"] }}">
                            {{-- <img class="social-logo" src="{{ Vite::asset('resources/img/{{ $menu_item["icon"] }}') }}" alt="{{ $menu_item["name"] }}"> --}}
                            <img class="social-logo" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="{{ $menu_item["name"] }}">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
      </div>

</footer>
