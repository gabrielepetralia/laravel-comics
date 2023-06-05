@php
    $main_menu = config("menus.main_menu");
@endphp

<header>
    <div class="gp-container">

      <div class="logo">
        <img src="img/dc-logo.png" alt="Logo DC">
      </div>

      <nav>
        <ul>

          @foreach ($main_menu as $menu_item)
          <li v-for="(link, index) in headerMenu" :key="index">
            <a href="{{ route($menu_item["name"])}}" class="fs-sm fw-medium {{ Route::currentRouteName() === $menu_item["name"] ? "active" : ""}}">{{ $menu_item["text"] }}</a>
          </li>
          @endforeach

        </ul>
      </nav>

    </div>
  </header>
