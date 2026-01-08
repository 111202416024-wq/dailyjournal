<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Daily Journal</title>
    <link rel="icon" href="" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
  </head>
  <style>
    @media (min-width: 768px) {
      .profile-table {
        max-width: 500px;
      }
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">AboutMe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
          </ul>

          <div class="d-flex ms-2">
            <button class="btn btn-dark me-1" id="btn-dark-mode">
              <i class="bi bi-moon-fill"></i>
            </button>
            <button class="btn btn-light" id="btn-light-mode">
              <i class="bi bi-sun-fill"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <section id="hero" class="text-center p-5 bg-danger-subtle">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="universitas.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>My Daily Journal</h5>
              <p>
                Berisi berbagai kegiatan atau aktifitas , fasilitas yang berada
                di lingkungan kampus.mulai dari mengikuti perkuliahan,
                mengerjakan tugas, berdiskusi dengan dosen dan teman.
              </p>
              <h6>
                <span class="tanggal-js"></span> <span class="jam-js"></span>
              </h6>
            </div>
          </div>

          <div class="carousel-item">
            <img src="belajarbersama.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>My Daily Journal</h5>
              <p>
                Berisi berbagai kegiatan atau aktifitas , fasilitas yang berada
                di lingkungan kampus.mulai dari mengikuti perkuliahan,
                mengerjakan tugas, berdiskusi dengan dosen dan teman.
              </p>
              <h6>
                <span class="tanggal-js"></span> <span class="jam-js"></span>
              </h6>
            </div>
          </div>

          <div class="carousel-item">
            <img src="wisuda.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>My Daily Journal</h5>
              <p>
                Berisi berbagai kegiatan atau aktifitas , fasilitas yang berada
                di lingkungan kampus.mulai dari mengikuti perkuliahan,
                mengerjakan tugas, berdiskusi dengan dosen dan teman.
              </p>
              <h6>
                <span class="tanggal-js"></span> <span class="jam-js"></span>
              </h6>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <section id="gallery" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="koding.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="tamankampus.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="foodcourt.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div></div>
      </div>
    </section>

    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Jadwal Kuliah Semester 3</h1>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-start">
          <div class="col">
            <div class="card h-100">
              <div class="card-header text-white bg-primary">Senin</div>
              <div class="card-body">
                <p>
                  <strong>08:00 - 10:30</strong><br />
                  Basis Data<br />
                  <small>Ruang D.2.k</small>
                </p>
                <p class="mb-0">
                  <strong>13:00 - 15:00</strong><br />
                  Dasar Pemrograman<br />
                  <small>Ruang H.3.1</small>
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-header text-white bg-success">Selasa</div>
              <div class="card-body">
                <p>
                  <strong>08:00 - 09:30</strong><br />
                  Logika Informatika<br />
                  <small>Ruang H.4.8</small>
                </p>
                <p class="mb-0">
                  <strong>14:00 - 16:00</strong><br />
                  Pendidikan Kewarganegaraan<br />
                  <small>Ruang Aula</small>
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-header text-white bg-danger">Rabu</div>
              <div class="card-body">
                <p>
                  <strong>10:00 - 12:00</strong><br />
                  Rekaya Perangkat Lunak<br />
                  <small>Ruang H.4.3</small>
                </p>
                <p class="mb-0">
                  <strong>13:30 - 15:00</strong><br />
                  Basis Data<br />
                  <small>Ruang H.5.4</small>
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-header text-dark bg-warning">Kamis</div>
              <div class="card-body">
                <p>
                  <strong>08:00 - 10:00</strong><br />
                  Technopreneurship<br />
                  <small>Ruang H.7.2</small>
                </p>
                <p class="mb-0">
                  <strong>11:00 - 13:00</strong><br />
                  Probabilitas dan Statistik<br />
                  <small>Ruang H.3.2</small>
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-header text-white bg-info">Jumat</div>
              <div class="card-body">
                <p>
                  <strong>08:00 - 09:30</strong><br />
                  Bahasa Inggris<br />
                  <small>KULINO</small>
                </p>
                <p class="mb-0">
                  <strong>13:00 - 15:00</strong><br />
                  Sistem Operasi<br />
                  <small>Ruang H.3.11</small>
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-header text-white bg-secondary">Sabtu</div>
              <div class="card-body">
                <p class="mb-0">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <div class="card-header text-white bg-secondary">Minggu</div>
              <div class="card-body">
                <p class="mb-0">Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="aboutme" class="p-5 bg-danger-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-center">Profil Mahasiswa</h1>
        <div
          class_models-v2.ChatTurn="row justify-content-center align-items-center"
        >
          <div class="col-md-4 text-center">
            <img
              src="saya.jpg"
              class="img-fluid rounded-circle mb-3"
              alt="Foto Profil"
              style="width: 200px; height: 200px; object-fit: cover"
            />
            <h3 class="d-md-none">Ade Ayu Fitriana</h3>
          </div>

          <div class="col-md-6 text-center text-md-start">
            <h2 class="d-none d-md-block">Ade Ayu Fitriana</h2>

            <div class="table-responsive">
              <table
                class="table table-borderless d-inline-block d-md-table profile-table"
              >
                <tbody style="text-align: left">
                  <tr>
                    <th style="width: 150px">NIM</th>
                    <td>: A11.2024.16024</td>
                  </tr>
                  <tr>
                    <th>Program Studi</th>
                    <td>: Teknik Informatika</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>: 111202416024@mhs.dinus.ac.id</td>
                  </tr>
                  <tr>
                    <th>Telepon</th>
                    <td>: +62 895 0981 4543</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>: Kendal, Ds. Cepiring RT07/RW03</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="footer" class="text-center p-5">
      <div>
        <div class="container">
          <div class="mb-3">
            <a
              href="https://www.instagram.com/ftrna0_0?igsh=MTZhbmUycDN3YmY4YQ=="
              class="text-secondary mx-2 fs-4"
              ><i class="bi bi-instagram"></i
            ></a>
            <a
              href="https://x.com/ADEAYUFITRIANA3?t=jIOh-eAZJsa2UHlGNE66LA&s=09"
              class="text-secondary mx-2 fs-4"
              ><i class="bi bi-twitter"></i
            ></a>
            <a href="https://wa.me/+6289509814543" class="text-secondary mx-2 fs-4"
              ><i class="bi bi-whatsapp"></i
            ></a>
          </div>
          <p class="mb-0 text-secondary">Ade Ayu Fitriana</p>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
      tampilWaktu();

      function tampilWaktu() {
        var waktu = new Date();

        var bulan = (waktu.getMonth() + 1).toString().padStart(2, "0");
        var tanggal = waktu.getDate().toString().padStart(2, "0");
        var tahun = waktu.getFullYear();
        var formatTanggal = tanggal + "/" + bulan + "/" + tahun;

        var jam = waktu.getHours().toString().padStart(2, "0");
        var menit = waktu.getMinutes().toString().padStart(2, "0");
        var detik = waktu.getSeconds().toString().padStart(2, "0");
        var formatJam = jam + ":" + menit + ":" + detik;

        var semuaTanggal = document.querySelectorAll(".tanggal-js");
        var semuaJam = document.querySelectorAll(".jam-js");

        for (var i = 0; i < semuaTanggal.length; i++) {
          semuaTanggal[i].innerHTML = formatTanggal;
        }

        for (var i = 0; i < semuaJam.length; i++) {
          semuaJam[i].innerHTML = formatJam;
        }

        setTimeout(tampilWaktu, 1000);
      }
    </script>

    <script type="text/javascript">
      const htmlElement = document.documentElement;
      const btnDark = document.getElementById("btn-dark-mode");
      const btnLight = document.getElementById("btn-light-mode");

      if (btnDark && btnLight) {
        btnDark.addEventListener("click", () => {
          htmlElement.setAttribute("data-bs-theme", "dark");
        });

        btnLight.addEventListener("click", () => {
          htmlElement.setAttribute("data-bs-theme", "light");
        });
      }
    </script>
  </body>
</html>
