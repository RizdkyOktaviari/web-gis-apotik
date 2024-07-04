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
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
  <script src="https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.js"></script>
  <link rel="stylesheet" href="css/theme.min.css">
  <link href="<?= base_url('css/theme.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('css/theme.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
  </style>
</head>

<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">
  <nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">
    <div class="container">
      <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="/home">
        <img src='/btg.png' width="100px" height="100px" alt="" title="" />
        <span class="ms-md-1 mt-1 fw-bolder me-md-5">SIG Apotek di Kota Bontang</span>
      </a>

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 list-group list-group-horizontal">
        <li class="nav-item">
          <a class="nav-link fs-5" href="/home" aria-label="Homepage">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="/data-apotiks" aria-label="A sample content page">
            Data Apotek
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="/login" aria-label="A system message page">
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
            <h1 class="display-huge mt-3 mb-3 lh-1">Detail Informasi Apotek</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="about-info-area section-gap">
      <div class="container" style="padding-top: 120px;">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
            <div class="panel panel-info panel-dashboard">
              <div class="panel-heading centered">
                <h2 class="panel-title"><strong>Informasi Apotek </strong></h2>
              </div>
              <div class="panel-body">
                <table class="table table-dark">
                  <div class="text-light bg-dark"> </div>
                  <tr>
                    <td>Nama Apotek</td>
                    <td>
                      <p><?= $apotik['name'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>
                      <p><?= $apotik['address'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>Kontak</td>
                    <td>
                      <?php
                      $contactNumber = preg_replace('/[^0-9]/', '', $apotik['contact']);
                      ?>
                      <p>
                        <?= htmlspecialchars($apotik['contact']) ?>
                        <a href="https://wa.me/<?= $contactNumber ?>" target="_blank">
                          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                        </a>
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>Layanan</td>
                    <td>
                      <?php
                      $description = $apotik['description'];
                      $parts = explode('%-%', $description);
                      foreach ($parts as $key => $part) {
                        $subParts = explode('*-*', $part);
                        echo "<p>" . ($key + 1) . ". " . htmlspecialchars($subParts[0]) . "</p>";
                        if (count($subParts) > 1) {
                          echo "<ul>";
                          for ($i = 1; $i < count($subParts); $i++) {
                            echo "<li>" . htmlspecialchars($subParts[$i]) . "</li>";
                          }
                          echo "</ul>";
                        }
                      }
                      ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-5" data-aos="zoom-in">
            <div class="panel panel-info panel-dashboard">
              <div class="panel-heading centered">
                <h2 class="panel-title"><strong>Lokasi</strong></h2>
              </div>
              <div class="panel-body">
                <div id="map-canvas" style="width:100%;height:380px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-black border-top border-dark">
      <div class="container py-vh-4 text-secondary fw-lighter">
        <div class="row">
          <div class="col-12 col-lg-5 py-4 text-center text-lg-start">
            <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="home">
              <img src='/btg.png' width="100px" height="100px" alt="" title="" />
              <span class="ms-md-1 mt-1 fw-bolder me-md-5">Sistem Informasi Geografis Apotek di Wilayah Kota
                Bontang</span>
            </a>
          </div>
        </div>
      </div>
      <div class="container text-center small py-vh-2 border-top border-dark">Made by
        <a href="https://templatedeck.com" class="link-fancy link-fancy-light" target="_blank">templatedeck.com</a>
        Distributed by <a href="https://themewagon.com" class="link-fancy link-fancy-light"
          target="_blank">ThemeWagon</a>
      </div>
    </footer>
</body>
<script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('js/aos.js'); ?>"></script>
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

    if (scrollpos >= header_height) {
      add_class_on_scroll();
    } else {
      remove_class_on_scroll();
    }
  })

  function initMap() {
    var lat = <?= json_encode($apotik['latitude']) ?>;
    var long = <?= json_encode($apotik['longitude']) ?>;
    var namaapotek = <?= json_encode($apotik['name']) ?>;
    var alamat = <?= json_encode($apotik['address']) ?>;

    var mymap = L.map('map-canvas').setView([lat, long], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(mymap);

    var marker = L.marker([lat, long]).addTo(mymap);
    marker.bindPopup('<strong>' + namaapotek + '</strong><br>' + alamat).openPopup();

    L.control.locate().addTo(mymap).start();

    var control = L.Routing.control({
      waypoints: [
        null,
        L.latLng(lat, long)
      ],
      routeWhileDragging: true
    }).addTo(mymap);

    mymap.on('locationfound', function (e) {
      var userLocation = L.latLng(e.latitude, e.longitude);
      var destination = L.latLng(lat, long);

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

</html>