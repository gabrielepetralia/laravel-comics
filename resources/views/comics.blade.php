@extends("layout.main")

@section("title")
    Comics
@endsection

@section("content")
    <div class="comics">
        <div class="gp-container">
            <h1 class="fs-xxl">Current Series</h1>

            <div class="cards-container">
                @foreach ($comics as $comic)
                <div class="gp-card">
                  <a href="{{ route("comic_details", ["slug" => $comic["slug"]]) }}">
                    <div class="thumb">
                      <img src="{{ $comic["thumb"] }}" alt="{{ $comic["series"] }}">
                    </div>
                    <h5 class="fs-md fw-light text-white">{{ $comic["series"] }}</h5>
                  </a>
                </div>
                @endforeach
            </div>

            <div class="load">
                <button class="fs-xs fw-semibold">Load More</button>
            </div>

        </div>
    </div>
@endsection
