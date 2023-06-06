@extends("layout.main")

@section("title")
    Comics | {{ $comic["series"] }}
@endsection

@section("content")
    <div class="comic-details">

      <div class="blue-bar"></div>

      <div class="top">
        <div class="gp-container">

          <div class="comic-img">
            <img src="{{ $comic["thumb"] }}" alt="{{ $comic["series"] }}">
          </div>

          <div class="row">

            <div class="col-8">
              <h2>{{ $comic["title"] }}</h2>

              <div class="price-bar d-flex">
                <div class="col-8 left d-flex justify-content-between">
                  <p class="mb-0">U.S Price: <span class="price text-white">{{ $comic["price"] }}</span></p>
                  <span>AVAILABLE</span>
                </div>
                <div class="col-4 right text-white">
                  <p class="text-center mb-0">Check Availability &#9660;</p>
                </div>
              </div>

              <p class="description">{{ $comic["description"] }}</p>
            </div>

            <div class="col-4 px-4">
              <h6 class="text-end">ADVERTISEMENT</h6>
              <a href="#">
                <img class="w-100" src="{{ Vite::asset('resources/img/dc-adv.jpg') }}" alt="Advertisement">
              </a>
            </div>

          </div>

        </div>
      </div>


      <div class="bottom bg-light">
        <div class="gp-container">
          <div class="row">

            <div class="col">
              <h4>Talent</h4>

              <table class="table">
                <tbody>
                  <tr class="table-light">
                    <td class="w-25">Art by:</td>
                    <td class="names">{{ implode(",",$comic["artists"]) }}</td>
                  </tr>
                  <tr class="table-light">
                    <td>Written by:</td>
                    <td class="names">{{ implode(", ",$comic["writers"]) }}</td>
                  </tr>
                </tbody>
              </table>

            </div>

            <div class="col">
              <h4>Specs</h4>

              <table class="table">
                <tbody>
                  <tr class="table-light">
                    <td class="w-25">Series:</td>
                    <td class="series">{{ $comic["series"] }}</td>
                  </tr>
                  <tr class="table-light">
                    <td>U.S. Price:</td>
                    <td>{{ $comic["price"] }}</td>
                  </tr>
                  <tr class="table-light">
                    <td>On Sale Date</td>
                    <td>{{ $comic["sale_date"] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

    </div>
@endsection

