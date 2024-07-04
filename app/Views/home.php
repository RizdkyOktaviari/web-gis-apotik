<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>SIG APOTEK KOTA BONTANG</title>
  <link rel="icon" href="btg.png">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="css/theme.min.css">

  <style>
    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-300.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-300.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    /* inter-400 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-regular.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-regular.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-500.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-500.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-700.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-700.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    #map-canvas {
      height: 600px;
      width: 100%;
    }
  </style>


</head>

<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

  <nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">
    <div class="container">
      <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="home">
        <img src="btg.png" width="100px" height="100px" alt="" title="" />
        <span class="ms-md-1 mt-1 fw-bolder me-md-5">SIG Apotek di Kota Bontang</span>
      </a>

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 list-group list-group-horizontal">
        <li class="nav-item">
          <a class="nav-link fs-5" href="home" aria-label="Homepage">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="data-apotiks" aria-label="A sample content page">
            Data Apotek
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="login" aria-label="A system message page">
            Login
          </a>
        </li>

      </ul>
    </div>
  </nav>

  <main>
    <div class="w-100 overflow-hidden position-relative bg-black text-white" data-aos="fade">
      <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
      <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
        <div class="row d-flex align-items-center justify-content-center py-vh-5">
          <div class="col-12 col-xl-10">
            <span class="h5 text-secondary fw-lighter">Sistem Informasi Geografis</span>
            <h1 class="display-huge mt-3 mb-3 lh-1">Apotek di Wilayah Kota Bontang</h1>
          </div>
          <div class="col-12 col-xl-8">
            <p class="lead text-secondary">Sistem informasi ini merupakan aplikasi pemetaan geografis apotek di wilayah
              Kota Bontang.
              Aplikasi ini memuat informasi dan lokasi dari apotek-apotek.</p>
          </div>
        </div>
      </div>

    </div>

    <div class="bg-dark">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-7 text-lg-end" data-aos="fade-right">
            <h2 class="display-4">Jangkauan Peta</h2>
          </div>
          <div class="col-12 col-lg-5" data-aos="fade-left">
            <p class="text-secondary">Aplikasi pemetaan geografis Apotek di Kota Bontang ini memuat informasi dan lokasi
              dari apotek yang ada di Kota Bontang.
              Pemetaan diambil dari data lokasi Google Maps dan data dari Dinas Kesehatan Kota Bontang.<br>
            </p>
          </div>
        </div>
      </div>
    </div>


    <div class="bg-black py-vh-3">
      <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">

        <div class="row gx-5">
          <div class="col-12 col-md-6">
            <h2 class="display-4">Peta Lokasi Apotek</h2>
          </div>
          <div class="card bg-transparent mb-5 mt-5" data-aos="zoom-in-up">

            <div class="row align-items-center">
              <div id="map-canvas" style="height: 400px; width: 100%;"></div>

              <div class="p-5">
              </div>
            </div>
          </div>

  </main>

  <footer class="bg-black border-top border-dark">
    <div class="container py-vh-4 text-secondary fw-lighter">
      <div class="row">
        <div class="col-12 col-lg-5 py-4 text-center text-lg-start">
          <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="home">
            <img src="btg.png" width="100px" height="100px" alt="" title="" />
            <span class="ms-md-1 mt-1 fw-bolder me-md-5">Sistem Informasi Geografis Apotek di Wilayah Kota
              Bontang</span>
          </a>

        </div>
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>
  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function () {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }
    })
  </script>

  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    function initMap() {
      var mymap = L.map('map-canvas').setView([0.1365498619228477, 117.48691903853751], 15);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(mymap);

      var apotiks = <?= json_encode($apoteks) ?>;

      var bounds = L.latLngBounds();

      if (apotiks && apotiks.length > 0) {
        apotiks.forEach(function (apotik) {
          var lat = parseFloat(apotik.latitude);
          var long = parseFloat(apotik.longitude);
          var namaapotek = apotik.name;
          var alamat = apotik.address;

          var marker = L.marker([lat, long]).addTo(mymap);
          marker.bindPopup('<strong>' + namaapotek + '</strong><br>' + alamat).openPopup();

          bounds.extend([lat, long]);
        });
      } else {
        console.error('No apotiks data available or invalid.');
      }

      mymap.fitBounds(bounds);

      L.control.locate().addTo(mymap).start();

      var control = L.Routing.control({
        waypoints: [
          null,
          L.latLng(apotiks[0].latitude, apotiks[0].longitude)
        ],
        routeWhileDragging: true
      }).addTo(mymap);

      mymap.on('locationfound', function (e) {
        var userLocation = L.latLng(e.latitude, e.longitude);
        var destination = L.latLng(apotiks[0].latitude, apotiks[0].longitude);

        control.setWaypoints([
          userLocation,
          destination
        ]);

        mymap.fitBounds(L.latLngBounds([userLocation, destination]));
      });

      mymap.on('locationerror', function (e) {
        alert(e.message);
      });
    }

    document.addEventListener("DOMContentLoaded", function () {
      initMap();
    });
  </script>

</body>

</html>