<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="icon" href="/img/new-favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <script
      src="https://kit.fontawesome.com/f99e0cbd69.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    @include('layouts.header')

    <!-- Menu Starter -->
    <div class="menu-banner animate__animated animate__fadeIn">
      <div class="container animate__animated animate__fadeIn">
        <div class="row">
          <div class="col-md-6">
            <div class="text-banner">
              <h1>
                Nikmati menu <br />
                pilihan terbaikmu
              </h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-banner">
              <img
                class="img-fluid"
                src="{{asset('assets/img/menu-background.png')}}"
                alt="menu-background"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sort">
      <div class="dropdown">
        <img
          class="btn btn-secondary dropdown-toggle btn-sort"
          type="button"
          id="dropdownMenu2"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          src="{{asset('assets/img/sorting1.svg')}}"
          alt="sorting-icon"
          style="background: none; border: none"
        />

        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item byName" type="button">
            Sort by Name
          </button>
          <button class="dropdown-item byHigher" type="button">
            Sort by Price High to ~
          </button>
          <button class="dropdown-item byLower" type="button">
            Sort by Price Low to ~
          </button>
        </div>
      </div>
    </div>

    <!-- Slider Search -->
    <a href="/search">
      <div class="slider-search animate__animated animate__slideInRight">
        <i class="fa fa-search"></i>
      </div>
    </a>

    <!-- Menu Favorite -->
    <div class="breakfast-menu">
      <h1
        class="animate__animated animate__slideInLeft animate__delay-0.5s animate__slower"
      >
        Sarapan Pagi
      </h1>

      <div
        class="row row-cols-md-4 card-breakfast d-flex justify-content-center"
      >
        <!-- <div class="card card-breakfast-item">
                <img src="/img/Big Mac Remake.png" class="card-img-top img-fluid breakfast-img mx-auto d-block"
                    alt="Big Mac">
                <div class="card-body">
                    <h4 class="card-title-">Big Mac</h4>
                    <p class="card-text">Burger Ikonik McDonald's. Dua lapis daging sapi gurih disajikan dengan saus
                        spesial, selada segar, keju, acar timun, bawang, diapit roti bertabur wijen</p>
                    <h4 class="card-title">Rp.26,000</h4>
                </div>
            </div> -->
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <script src="{{asset('assets/js/data-source.js')}}" type="module"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
