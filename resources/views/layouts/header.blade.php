<nav class="navbar navbar-light navbar-expand-lg" id="myNavbar">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#mainNav"
            aria-controls="mainNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <a
            class="navbar-brand animate__animated animate__fadeInDown"
            href="/home"
          >
            <img src="{{ asset('assets/img/logo_mcd_new1.png')}}" width="95" height="69.73" />
          </a>

          <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item px-6 active">
                <a
                  href="/home"
                  class="nav-link animate__animated animate__fadeInDown"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>

              <li class="nav-item px-6 dropdown">
                <a
                  class="btn btn-warning dropdown-toggle animate__animated animate__fadeInDown"
                  href="#"
                  role="button"
                  id="dropdownMenuLink"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Menu
                </a>

                <div
                  class="dropdown-menu dropdown-menu-right mega-menu"
                  aria-labelledby="servicesDropdown"
                >
                  <div
                    class="d-md-flex align-items-start justify-content-center animate__animated animate__fadeInDown"
                  >
                    <div>
                      <div class="dropdown-header">All</div>
                      <a class="dropdown-item" href="/breakfast"
                        >Sarapan Pagi</a
                      >
                      <a class="dropdown-item" href="#">Daging Ayam</a>
                      <a class="dropdown-item" href="#">Ikan</a>
                      <a class="dropdown-item" href="#">Minuman</a>
                      <a class="dropdown-item" href="#">Ice</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-warning" href="#"
                        >Lihat semua menu ></a
                      >
                    </div>
                    <div>
                      <div class="dropdown-header">Menu</div>
                      <a class="dropdown-item" href="#">Makanan Penutup</a>
                      <a class="dropdown-item" href="#">Happy Meal</a>
                      <a class="dropdown-item" href="#">Packet Family</a>
                      <a class="dropdown-item" href="#">Mc Cafe</a>
                      <a class="dropdown-item" href="#">Camilan</a>
                    </div>
                    <div>
                      <div id="card">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/img/Paket Panas1.jpg')}}"
                          alt="image-dropdown"
                        />
                        <h5>Paket Panas 1</h5>
                        <p>Nikmati ayam lainnya hanya diMcDay.</p>
                        <button
                          type="button"
                          class="btn btn-danger btn-lg button-card-dropdown"
                        >
                          Pesan Sekarang
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item px-6">
                <a
                  href="#"
                  class="nav-link animate__animated animate__fadeInDown"
                  >Promo</a
                >
              </li>
              <li class="nav-item px-6">
                <a
                  href="#"
                  class="nav-link animate__animated animate__fadeInDown"
                  >Berita Terkini</a
                >
              </li>
              <li class="nav-item px-6 d-flex">
                <i
                  class="fas fa-map-marked-alt img-fluid map-icon animate__animated animate__fadeInDown"
                ></i>
                <a
                  class="nav-link animate__animated animate__fadeInDown"
                  href="#"
                  >Map</a
                >
              </li>
              <li class="nav-item px-6 d-flex">
                <a href="/cart">
                  <img
                    src="{{ asset('assets/img/cart-icon.svg') }}"
                    alt="cart-icon"
                    class="animate__animated animate__fadeInDown cart-icon"
                  />
                </a>
              </li>
              <li class="nav-item px-6 d-flex">
                <a href="/admin">
                  <img
                    src="{{ asset('assets/img/admin.svg') }}"
                    alt="cart-icon"
                    class="animate__animated animate__fadeInDown cart-icon"
                  />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>