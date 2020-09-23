<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sarapan Pagi</title>
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
            src="{{asset('assets')}}/img/menu-background.png"
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
    </div>

    <!-- Footer -->
    {{-- <footer class="light">
      <div class="footer-top">
        <div class="container">
          <div class="row footer-list">
            <div class="col col-lg-4 col-xl-8">
              <h5 class="footer-title">McDay’s</h5>
              <div class="footer-item mb-md-down-4">
                <div class="row">
                  <div class="col-md-5">
                    <ul class="ul">
                      <li><a href="#">Hubungi Kami</a></li>
                      <li><a href="#">Tentang Kami</a></li>
                      <li><a href="#">Karier</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="ul">
                      <li><a href="#">Layanan</a></li>
                      <li><a href="#">Sertifikasi dan Jaminan Kualitas</a></li>
                      <li><a href="#">McDay's App</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-lg-6 col-xl-3">
              <div class="footer-item">
                <h5 class="footer-title">Hubungi Kami</h5>
                <ul class="footer-social d-flex">
                  <li>
                    <a
                      href="http://www.facebook.com/McDonaldsID"
                      target="_blank"
                    >
                      <i class="fab fa-facebook-square fa-lg"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://instagram.com/mcdonaldsid" target="_blank">
                      <i class="fab fa-instagram fa-lg"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.youtube.com/user/McDonaldsID"
                      target="_blank"
                    >
                      <i class="fab fa-youtube fa-lg"></i>
                    </a>
                  </li>
                </ul>
                <div class="btn-group-download d-flex">
                  <a
                    href="https://apps.apple.com/id/app/mcdonalds/id1217507712"
                    target="_blank"
                    ><img
                      src="/img/Download In Appstore.png"
                      alt="Appstore Download"
                  /></a>
                  <a
                    class="playstore"
                    href="https://play.google.com/store/apps/details?id=com.mcdonalds.mobileapp"
                    target="_blank"
                    ><img
                      src="/img/Download In Playstore.png"
                      alt="Playstore Download"
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <h6 class="text-center">
          Copyrigth © 2020 Muhammad Rayhan All Rights Reserved.
        </h6>
      </div>
    </footer> --}}
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
