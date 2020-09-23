<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Menu</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <script
      src="https://kit.fontawesome.com/f99e0cbd69.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
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

    <!-- Card -->
    <div class="search-container">
      <h1
        class="animate__animated animate__slideInLeft animate__delay-0.5s animate__slower"
      >
        Search Your Menu
      </h1>
      <div
        class="search-input animate__animated animate__fadeIn animate__delay-1s animate__slower"
      >
        <input id="search-input" type="text" placeholder="Type Your Menu" />
        <i class="fas fa-search"></i>
      </div>
    </div>

    <div class="search-menu">
      <div
        class="row row-cols-md-4 card-searchMenu d-flex justify-content-center"
      >
        <div class="col-6 col-md-3 col-search">
          <!-- <div class="card card-searchMenu-item">
                <img src="link-gambar" class="card-img-top img-fluid searchMenu-img mx-auto d-block" alt="Big Mac">
                <div class="card-body">
                    <h4 class="card-title-searchMenu">nama</h4>
                    <p class="card-text-searchMenu">desc</p>
                    <h4 class="card-title-searchMenu">harga</h4>
                </div>
            </div> -->
        </div>
      </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- <script src="/data/data-source.js"></script> -->
  <script src="{{asset('assets/js/search.js')}}" type="module"></script>
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
