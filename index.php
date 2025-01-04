<?php
$nama = "Budi Saroso";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <title>portofolio <?=$nama?></title>
    <link
      href="bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- my css  -->
    <link
      rel="stylesheet"
      href="style.css"
    />
  </head>
  <body id="home">
    

    <?php include "components/navbar.php" ?>
    <?php include "components/header.php" ?>

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3 mt-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <p>
              hello internet! my name is <?=$nama?> you can call me saro, i was born in rembang 21 january 2002 and now im 22 years old, i am a 3rd semester informatics engineering student at pelita bangsa university, i also have a hobby
              as a photographer and also street photography. I have work experience as a production operator for 2 years 9 months. and now im looking for a job i hoped u like it with my portofolio
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- riwayat pendidikan -->
    <section id="Pendidikan">
    <div class="container">
        <div class="row text-center mb-3 mt-3">
            <div class="col">
                <h2>Riwayat Pendidikan</h2>
            </div>
        </div>
        <div class="row">
            <!-- Kolom SD -->
            <div class="col-md-4 mt-3">
                <div class="card shadow-sm border-primary w-100">
                    <div class="card-header text-center" style="background-color: rgb(208, 236, 218); color: #000;">
                        Sekolah Dasar (SD)
                    </div>
                    <div class="card-body">
                        <p><strong>Institusi:</strong> SD Negeri 15 Wanasari</p>
                        <p><strong>Tahun Masuk:</strong> 2008</p>
                        <p><strong>Tahun Lulus:</strong> 2014</p>
                    </div>
                </div>
            </div>

            <!-- Kolom SMP -->
            <div class="col-md-4 mt-3">
                <div class="card shadow-sm border-primary w-100">
                    <div class="card-header text-center" style="background-color: rgb(208, 236, 218); color: #000;">
                        Sekolah Menengah Pertama (SMP)
                    </div>
                    <div class="card-body">
                        <p><strong>Institusi:</strong> SMP Negeri 12 Tambun Selatan</p>
                        <p><strong>Tahun Masuk:</strong> 2014</p>
                        <p><strong>Tahun Lulus:</strong> 2017</p>
                    </div>
                </div>
            </div>

            <!-- Kolom SMK -->
            <div class="col-md-4 mt-3 mb-5">
                <div class="card shadow-sm border-primary w-100">
                    <div class="card-header text-center" style="background-color: rgb(208, 236, 218); color: #000;">
                        Sekolah Menengah Atas (SMK)
                    </div>
                    <div class="card-body">
                        <p><strong>Institusi:</strong> SMK Negeri 1 Cikarang Barat</p>
                        <p><strong>Tahun Masuk:</strong> 2017</p>
                        <p><strong>Tahun Lulus:</strong> 2020</p>
                    </div>
                </div>
            </div>

                 <!-- Kolom Universitas-->
                 <div class="col-md-4 mt-3">
                <div class="card shadow-sm border-primary w-100">
                    <div class="card-header text-center" style="background-color: rgb(208, 236, 218); color: #000;">
                        Universitas
                    </div>
                    <div class="card-body">
                        <p><strong>Institusi:</strong> Universitas Pelita Bangsa</p>
                        <p><strong>Tahun Masuk:</strong> 2023</p>
                        <p><strong>Tahun Lulus:</strong> saat ini</p>
                    </div>
                </div>
            </div>
</div>
    </div>
</section>

<!-- akhir riwayat pendidikan -->

<!-- pengalaman kerja -->
<section id="pengalaman-kerja" class="py-5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">Pengalaman Kerja</h2>
                <p class="text-muted">Berikut adalah pengalaman kerja yang telah saya lalui.</p>
            </div>
        </div>
        <div class="row">
            <?php
            // Data pengalaman kerja
            $pengalamanKerja = [
                [
                    'jabatan' => 'Operator Produksi',
                    'perusahaan' => 'PT Kiyokuni Indonesia',
                    'lokasi' => 'Bekasi, Indonesia',
                    'tahun_mulai' => 2020,
                    'tahun_selesai' => 2021,
                    'deskripsi' => '•	Menjalankan proses produksi dengan mengoperasikan Mesin Stamping Press H&F (Hitachi Zosen Fukui) yang berkapasitas 60 Ton untuk mencapai target GSPH sesuai dengan SOP yang telah ditetapkan perusahaan'
                ],
                [
                    'jabatan' => 'Operator Produksi',
                    'perusahaan' => 'PT Fuji Technica Indonesia',
                    'lokasi' => 'Karawang, Indonesia',
                    'tahun_mulai' => 2021,
                    'tahun_selesai' => 2023,
                    'deskripsi' => '•	Menjalankan proses produksi dengan mengoperasikan Mesin Stamping Press H&F (Hitachi Zosen Fukui) yang berkapasitas 1200 Ton untuk mencapai target GSPH sesuai dengan SOP yang telah ditetapkan perusahaan.'
                ],
                [
                    'jabatan' => 'Warehouse Control Delivery',
                    'perusahaan' => 'Indonesia Epson Industry ',
                    'lokasi' => 'Cikarang, Indonesia',
                    'tahun_mulai' => 2024,
                    'tahun_selesai'=> 'saat ini',
                    'deskripsi' => 'Receiving barang yang berasal dari warehouse lalu mensupply barang ke produksi sesuai dengan line yang di tentukan.'
                ]
            ];

            // Menampilkan data pengalaman kerja
            foreach ($pengalamanKerja as $kerja) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card shadow-sm border-0">';
                echo '<div class="card-body">';
                echo '<div class="d-flex align-items-center mb-3">';
                echo '<div class="icon me-3" style="font-size: 2rem; color: rgb(208, 236, 218);">';
                echo '<i class="bi bi-briefcase-fill"></i>'; // Ikon briefcase
                echo '</div>';
                echo '<h5 class="card-title mb-0">' . htmlspecialchars($kerja['jabatan']) . '</h5>';
                echo '</div>';
                echo '<p class="text-muted mb-1"><strong>Perusahaan:</strong> ' . htmlspecialchars($kerja['perusahaan']) . '</p>';
                echo '<p class="text-muted mb-1"><strong>Lokasi:</strong> ' . htmlspecialchars($kerja['lokasi']) . '</p>';
                echo '<p class="text-muted mb-1"><strong>Durasi:</strong> ' . htmlspecialchars($kerja['tahun_mulai']) . ' - ' . htmlspecialchars($kerja['tahun_selesai']) . '</p>';
                echo '<p class="text-muted"><strong>Deskripsi:</strong> ' . htmlspecialchars($kerja['deskripsi']) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- akhir pengalaman kerja -->

  <!-- Keahlian -->
  <section id="keahlian" class="py-5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">Keahlian</h2>
                <p class="text-muted">Berikut adalah daftar keahlian yang saya kuasai dengan tingkat kemampuan yang ditampilkan secara visual.</p>
            </div>
        </div>
        <div class="row">
            <?php
            // Data keahlian
            $keahlian = [
                ['nama' => 'HTML & CSS', 'tingkat' => 70],
                ['nama' => 'JavaScript', 'tingkat' => 70],
                ['nama' => 'PHP & MySQL', 'tingkat' => 80],
                ['nama' => 'Bootstrap', 'tingkat' => 70],
                ['nama' => 'Editing', 'tingkat' => 86],
                ['nama' => 'UI/UX Design', 'tingkat' => 70],
            ];

            // Menampilkan data keahlian
            foreach ($keahlian as $skill) {
                echo '<div class="col-md-6 mb-4">';
                echo '<h5 class="fw-bold">' . htmlspecialchars($skill['nama']) . '</h5>';
                echo '<div class="progress" style="height: 25px;">';
                echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" ';
                echo 'style="width: ' . htmlspecialchars($skill['tingkat']) . '%; background-color: rgb(208, 236, 218);" ';
                echo 'aria-valuenow="' . htmlspecialchars($skill['tingkat']) . '" aria-valuemin="0" aria-valuemax="100">';
                echo htmlspecialchars($skill['tingkat']) . '%';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

  <!-- Akhir Keahlian -->

    <!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row mb-3 mt-3">
          <div class="col">
            <h3>Street Photography</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/DSC09965.JPG"
                class="card-img-top"
                alt="Foto1"
              />
              <div class="card-body">
                <p class="card-text">Photo i took in GBK Softball Stadium .</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/DSC00571.JPG"
                class="card-img-top"
                alt="Foto2"
              />
              <div class="card-body">
                <p class="card-text">photo i took in Kampung Bandan Station.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/2023_12_15_18_40_IMG_4179.JPG"
                class="card-img-top"
                alt="Foto3"
              />
              <div class="card-body">
                <p class="card-text">Photo I took in lebak bulus.</p>
              </div>
            </div>
          </div>
          <div class="row mb-3 mt-5">
          <div class="col">
            <h4>Videographer and editor</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/Edit1.jpg"
                class="card-img-top"
                alt="Foto4"
              />
              <div class="card-body">
                <p class="card-text">Editing video for mr wawan from bogasari.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
            <a href="https://www.tiktok.com/@budisarooooo/video/7376539513935449350" target ="_blank">
              <img
                src="img/Edit2.jpg"
                class="card-img-top"
                alt="Foto5"
              />
              <div class="card-body">
                <p class="card-text">make videos for KKP.</p>
              </div>
            </div>
          </div>
          </a>  
          <div class="col-md-4">
            <div class="card">
            <a href="https://www.tiktok.com/@budisarooooo/video/7288857876599147781" target ="_blank">
              <img
                src="img/Edit3.jpg"
                class="card-img-top"
                alt="Foto3"
              />
              <div class="card-body">
                <p class="card-text">make videos for college assignments.</p>
              </div>
            </div>
          </div>
          </a>
        </div>
      </div>
    </section>
    <!-- akhir project -->

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mt-5">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-3">
              <label
                for="exampleFormControlInput1"
                class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
              />
            </div>
            <div class="mb-3">
              <label
                for="exampleFormControlTextarea1"
                class="form-label"
                >Massage</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    <!-- footer -->
    <footer class="bg-success shadow text-white text-center"> 

      <p>Created By <a href="https://www.instagram.com/budisarutobi/" class="text-white"><?=$nama?></a></p>
      <p2>imagine people living in a peace</p2>
    </footer>
    <!-- akhir footer -->
    <script
      src="bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous" 
    ></script>
  </body>
</html>
