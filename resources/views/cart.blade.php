<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
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
                Jangan sampai <br />
                barangmu tertinggal
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

    <!-- Shopping -->
    <div class="containerr">
      <div class="section">
        <div class="card" style="border: none">
          <!-- <div class="shopping-cart">
            <div class="cart">
              <img src="/img/Shopping cart/Big Mac.svg" alt="Big Mac" />
              <h3>Big Mac</h3>
              <div class="input-field">
                <button class="minus">
                  <img
                    src="/img/Shopping cart/minus-square-white.svg"
                    alt="minus"
                  />
                </button>
                <input
                  id="jumlah"
                  name="jumlah"
                  type="number"
                  value="1"
                  min="0"
                />
                <button class="plus">
                  <img
                    src="/img/Shopping cart/plus-square-white.svg"
                    alt="plus"
                  />
                </button>
              </div>
              <h3 class="harga-card">Rp. 150.000</h3>
            </div>
            <div class="delete-card">
              <button class="remove">
                <img src="/img/delete-bin-line.svg" alt="delete" />
              </button>
            </div>
          </div> -->
        </div>

        <div class="animation  animate__animated animate__fadeInDown animate__delay-1s"></div>
        <div class="shopping-summary">
          <div class="shopping-total">
            <h3>Ringkasan belanja</h3>
            <hr class="style-three" />
            <div class="shp-bottom">
              <h3>Total harga</h3>
              <h3 class="total-harga">0</h3>
            </div>
          </div>
          <button>Beli</button>
        </div>
      </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- <script src="/data/data-source.js" type="module"></script> -->
    <script src="{{asset('assets/js/newShopping-cart.js')}}" type="module"></script>
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
