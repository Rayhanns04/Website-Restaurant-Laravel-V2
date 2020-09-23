
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
    <header>
      <!-- Alert  -->
      @include('layouts.alert');

      <!-- navbar 2 -->
      @include('layouts.header');

    </header>

    <main>
      <!-- Carousel Image Slider -->
      <div
        id="carouselExampleCaptions"
        class="carousel slide animate__animated animate__fadeIn"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="0"
            class="active bg-warning"
          ></li>
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="1"
            class="bg-warning"
          ></li>
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="2"
            class="bg-warning"
          ></li>
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="3"
            class="bg-warning"
          ></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="{{ asset('assets/img/Home Slide 1.jpg') }}"
              class="w-100 img-fluid"
              alt="slide1"
            />
            <div class="carousel-caption d-none d-md-block">
              <button
                type="button"
                class="btn btn-danger btn-lg d-flex justify-content-start button-slide"
              >
                Baca Selengkapnya
              </button>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="{{ asset('assets/img/Home Slide 2.jpg') }}"
              class="w-100 img-fluid"
              alt="slide2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ asset('assets/img/Home Slide 3.jpg') }}"
              class="w-100 img-fluid"
              alt="slide3"
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ asset('assets/img/Home Slide 4.jpg') }}"
              class="w-100 img-fluid"
              alt="slide4"
            />
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- Promo Poster or Card -->
      <div class="promo">
        <h1
          class="animate__animated animate__slideInLeft animate__delay-0.5s animate__slower"
        >
          Promo Menarik
        </h1>
        <div
          class="row row-cols-md-4 card-promo-container d-flex justify-content-center animate__animated animate__fadeIn animate__slower"
        >
          <!-- <div class="card card-promo">
                <div class="animate-img">
                    <img src="/img/Baru Bebaskan Rasamu.jpg" class="card-img-top img-fluid" alt="poster2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">BARU! Bebaskan Rasamu</h5>
                    <p class="card-text">Coba lezatnya pisang dan cokelat Belgia dalam pie yang renyah dalam Banana
                        Choco Pie. Jika ingin menu yang dingin, Blu-nana Waffle Cone, blue waffle cone dengan es krim
                        vanilla McD dengan banana coating lezat dan menarik bisa menjadi pilihan.</p>
                    <p class="card-text"><small class="text-muted"><i class="fas fa-calendar-alt"></i>BERLAKU HINGGA 30
                            Agustus 2020</small></p>
                </div>
            </div> -->
        </div>
      </div>

      <!-- Menu Favorite -->
      <div class="menu-favorite-home">
        <h1
          class="animate__animated animate__slideInRight animate__delay-0.5s animate__slower"
        >
          Menu Favorit
        </h1>
        <div
          class="row row-cols-md-4 card-favorite d-flex justify-content-center"
        >
          <!-- <div class="card card-favorite-item">
                    <img src="/img/Big Mac Remake.png" class="card-img-top img-fluid favorite-img mx-auto d-block"
                        alt="Big Mac">
                    <div class="card-body">
                        <h4 class="card-title">Big Mac</h4>
                        <p class="card-text">Burger Ikonik McDonald's. Dua lapis daging sapi gurih disajikan dengan saus
                            spesial, selada segar, keju, acar timun, bawang, diapit roti bertabur wijen</p>
                        <h4 class="card-title">Rp.26,000</h4>
                        </div>
                    </div> -->
        </div>
      </div>

      <!-- Galery -->
      <div class="home-galery">
        <div class="container">
          <div class="row row-galery">
            <div class="col-lg-6 galery-img-container">
              <img
                class="galery-img"
                src="{{ asset('assets/img/Polaroid_Full.jpg')}}"
                alt="polaroid-img"
              />
            </div>
            <div
              class="col-lg-6 title-galery animate__animated animate__slideInRight animate__delay-2s animate__slower"
            >
              <h2>Ciptakan Moment Bahagia<br />Bareng siKecil</h2>
              <p>Semua hal seru hanya ada di Dunia Anak McDay’s</p>
              <button type="button" class="btn btn-danger btn-lg">
                Pelajari Lebih Lanjut
              </button>
            </div>
          </div>
          <img class="liquid" src="{{ asset('assets/img/liquid.png')}}" alt="liquid" />
        </div>
      </div>

      <!-- Download Application -->
      <div class="downloadApps">
        <div class="row">
          <div class="col-lg-6 title-downloadApps">
            <h2
              class="animate__animated animate__slideInLeft animate__delay-2s animate__slower"
            >
              Dapatkan promo eksklusif <br />hanya di aplikasi McDay’s
            </h2>
            <div
              class="download-button animate__animated animate__slideInLeft animate__delay-2s animate__slower"
            >
              <a
                href="https://apps.apple.com/id/app/mcdonalds/id1217507712"
                target="_blank"
                ><img
                  src="{{ asset('assets/img/Download In Appstore.png')}}"
                  alt="Appstore Download"
              /></a>

              <a
                href="https://play.google.com/store/apps/details?id=com.mcdonalds.mobileapp"
                target="_blank"
                ><img
                  {{-- src="{{ asset('assets/img/Download In Playstore.png')}}" --}}
                  src="https://i.imgur.com/Aje7Fdu.png"
                  alt="Playstore Download"
              /></a>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <img class="img-phone" src="{{ asset('assets/img/Phone.png')}}" alt="Phone" />
            <img
              class="hearth animate__animated animate__bounceIn animate__fast animate__repeat-3"
              src="{{ asset('assets/img/Hearth.png')}}"
              alt="Hearth1"
            />
          </div>
        </div>
      </div>

      <!-- Lowongan Kerja -->
      <div class="job-vacancy">
        <div class="row">
          <div class="col">
            <img class="job-img" src="{{ asset('assets')}}/img/Job-vancy.png" alt="Job-img" />
          </div>
          <div
            class="col-lg-6 tittle-jobVancy animate__animated animate__slideInRight animate__delay-2s animate__slower"
          >
            <h2>
              Jadilah bagian dari keluarga<br />
              kami
            </h2>
            <p>
              Di McDay’s's, kami lebih dari sekadar bisnis. Kami adalah<br />komunitas
              tempat Anda berlatih keterampilan hidup dan sebagai<br />
              wadah untuk mengejar serta mewujudkan impianmu.
            </p>
            <button type="button" class="btn btn-danger btn-lg">
              Lihat Lowongan Kerja
            </button>
          </div>
        </div>
      </div>
    </main>

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
