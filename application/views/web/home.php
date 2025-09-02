<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EduFind</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/web/images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/web/css/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/web/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>EduFind</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="#about-us" class="nav-item nav-link">About Us</a>
                    <a href="#map" class="nav-item nav-link">Map</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom"
        style="margin-bottom: 90px; background-image: url('assets/kids-in-school.jpg'); background-size: cover; background-position: center 10%; height: 500px; position: relative;">
        <!-- Overlay transparan -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4);"></div>

        <!-- Konten teks -->
        <div class="container text-center my-5 py-5 position-relative">
            <h1 class="text-white mt-4 mb-4" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Mencari Sekolah Mudah</h1>
            <h1 class="text-white display-3 mb-5" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Cerdas bersama EduFind</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="about-us">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="assets/funny-children-classroom.jpg"
                            style="object-fit: cover; object-position: 10% 20%;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                        <h1 class="display-4">Find the Best Schools, Shape the Brightest Futures</h1>
                    </div>
                    <p>Selamat datang di EduFind! Kami dengan senang hati menyediakan berbagai informasi terkait lokasi sekolah di wilayah Jakarta Selatan, khususnya di daerah Cilandak. Melalui website ini, Anda dapat menemukan peta interaktif yang memudahkan pencarian lokasi sekolah beserta fasilitas yang tersedia, seperti ruang kelas, perpustakaan, laboratorium, dan sarana olahraga. EduFind hadir untuk membantu orang tua menemukan sekolah terbaik yang sesuai dengan kebutuhan dan potensi anak.</p>
                    <p>Kami berharap website ini dapat memberikan kemudahan bagi Anda yang sedang mencari informasi lokasi sekolah. Tujuan utama pembuatan website ini adalah sebagai bagian dari pemenuhan tugas akhir mata kuliah Aplikasi Sistem Informasi Geografis (SIG), sekaligus memberikan kontribusi positif dalam mendukung kemudahan akses informasi pendidikan di wilayah Jakarta Selatan, khususnya Cilandak.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Map Start -->
    <div class="container-fluid px-0 py-3" id="map">
        <div class="row mx-0 justify-content-center pt-3">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-2">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-1">Map</h6>
                    <h1 class="display-4" style="font-size: 2rem; line-height: 1.2; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; max-width: 90%; margin: 0 auto;">
                        Jelajahi peta untuk menemukan lokasi sekolah di Jakarta Selatan, Cilandak.
                    </h1>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-10 d-flex justify-content-center">
                <!-- Map Section -->
                <iframe src="<?= base_url() ?>/home" width="100%" height="650" style="border: 0; border-radius: 8px; max-width: 1150px;">
                </iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- List of Schools Start -->
    <div class="container-fluid py-5">
        <div class="container py-4">
            <div class="section-title text-center position-relative mb-3">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Daftar Sekolah di Cilandak</h6>
            </div>
            <div style="width: 100%; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; font-family: Arial, sans-serif;">
                <!-- Header Section -->
                <div style="display: flex; background-color: #003366; color: white; font-weight: bold; align-items: center; height: 60px; border-bottom: 2px solid #ddd; text-align: center;">
                    <div style="flex: 2; padding: 10px; text-align: left;">Nama Sekolah</div>
                    <div style="flex: 4; padding: 10px; text-align: left;">Alamat</div>
                    <div style="flex: 2; padding: 10px; text-align: left;">No Telp</div>
                    <div style="flex: 4; padding: 10px; text-align: left;">Fasilitas</div>
                    <div style="flex: 1.5; padding: 10px; text-align: left;">Foto</div>
                </div>

                <!-- Data Section -->
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        TK Pertiwi IV
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Wijaya Kusuma, RT.1/RW.4, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 75818519
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Ruang Kepala Sekolah, Ruang Guru, UKS, Toilet, Taman Bermain
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/TK Pertiwi IV.jpg" alt="TK Pertiwi IV" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        TK Hang Tuah 11
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Jati Raya Barat, RT.8/RW.6, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 75816311
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Taman Bermain
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/TK Hang Tuah 11.jpg" alt="TK Hang Tuah 11" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SDN Lebak Bulus 02
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Pertanian Raya No. 59 RT.4/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7662367
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium Komputer, Musholla, Kantin, Lapangan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SDN Lebak Bulus 02.jpg" alt="SDN Lebak Bulus 02" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SDN Lebak Bulus 03
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Pertanian III No. 58, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7698247
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium Komputer, Kantin, Lapangan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SDN Lebak Bulus 03.jpg" alt="SDN Lebak Bulus 03" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Azhari Islamic School Lebak Bulus Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Pertanian Raya No. 43, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        0812-9580-1894
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Laboratorium, Perpustakaan, Musholla, Ruang Serbaguna, Lapangan Olahraga, Kantin, UKS, Ruang Musik, Ruang Seni, Fasilitas Tahfizh
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Azhari Lebak Bulus.jpg" alt="Azhari Lebak Bulus" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SLB Negeri 01 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Pertanian Raya RT.10/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7696074
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Lapangan Olahraga, Lingkungan Hijau, Lingkungan yang aman, Kantin Sehat, Ruang Pengembangan Diri dan PKPBI, Vokasional/Keterampilan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SLBN 01 Jakarta.jpg" alt="SLBN 01 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SDN Lebak Bulus 04
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Puskesmas No.1 RT.14/RW.3, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7695039
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium Komputer, Kantin, Lapangan </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SDN Lebak Bulus 04.jpg" alt="SDN Lebak Bulus 04" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Al Azkar Islamic School Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Karang Tengah Raya, RT.6/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        0813-9997-2001
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Masjid, Lapangan, Kelas AC, Kantin
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Al Azkar Islamic School Jakarta.jpg" alt="Al Azkar Islamic School Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SDN Lebak Bulus 07
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Gn. Balong No. 7 RT.7/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7693104
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium Komputer, Kantin, Lapangan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SDN Lebak Bulus 07.jpg" alt="SDN Lebak Bulus 07" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Sekolah Gemala Ananda
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Lb. Bulus III No.93G 9, RT.9/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        0812-8481-9940
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Ruang Guru, Ruang Pimpinan, Ruang Ibadah, UKS, Toilet, Ruang Sirkluasi, Tempat Bermain/Olahraga
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Sekolah Gemala Ananda.jpg" alt="Sekolah Gemala Ananda" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Yayasan Pendidikan Keluarga Widuri
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Gunung Balong I No.6 9, RT.9/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7503647
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruangan Kelas AC, Ruang Guru, Ruang Kepala Sekolah, Lab Komputer, Perpustakaan, Koperasi, UKS, Aula/Ruang Serbaguna, Masjid, Kantin, Toilet, Tempat Parkir
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Yayasan Pendidikan Keluarga Widuri.jpg" alt="Yayasan Pendidikan Keluarga Widuri" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Sekolah Dasar Islam Al Barkah
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Karang Tengah Raya No.10, RT.5/RW.4, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 75910612
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Kelas Full AC, Lapangan Olahraga, Kantin, Lab Komputer, Ruang Kesehatan, Ruang Multimedia
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Sekolah Dasar Islam Al Barkah.jpg" alt="Sekolah Dasar Islam Al Barkah" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SD Negeri Pondok Labu 11
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Komp. Timah Jl. Margasatwa No.RT.1, RT.1/RW.3, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7511195
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium, Musholla, Kantin, Lapangan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SD Negeri Pondok Labu 11 (1).jpg" alt="SD Negeri Pondok Labu 11" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SDN Pondok Labu 13
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Bango II No.7 3, RT.7/RW.3, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7663460
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium, Musholla, Kantin, Lapangan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/images/sekolah/SDN Pondok Labu 13.jpg" alt="SDN Pondok Labu 13" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SD Charitas
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Swakarya No.D-6 1, RT.1/RW.4, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7669632
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, UKS, Toilet, Perpustakaan, Laboratorium, Kantin, Lapangan
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/images/sekolah/SD Charitas.jpg" alt="SD Charitas" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Sekolah Purba Adhika
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Karang Tengah I No.31 1, RT.3/RW.8, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 75905850
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Laboratorium, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Lapangan, TU
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Sekolah Purba Adhika.jpg" alt="Sekolah Purba Adhika" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        Al Jabr Islamic School
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Bango II No.38, RT.6/RW.3, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 75913675
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Lapangan Basket, Lapangan Futsal, Playground, Green Area, Swimming Pool
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/Al Jabr Islamic School.jpg" alt="Al Jabr Islamic School" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMPN 85 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Margasatwa No.8, RT.15/RW.1, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7657652
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Laboratorium, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Lapangan, Ruang TU
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMPN 85 Jakarta.jpg" alt="SMPN 85 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMPN 96 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Komp. Timah No.1, RT.1/RW.3, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7658121
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Laboratorium, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Lapangan, Ruang TU
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMPN 96 Jakarta.jpg" alt="SMPN 96 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMPN 37 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Taman Wijaya Kusuma I No.8 8, RT.8/RW.4, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7695272
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Laboratorium, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Lapangan, Ruang TU
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMPN 37 Jakarta.jpg" alt="SMPN 37 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMPN 226 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Komplek TNI AL Pangkalan Jati, Jl. Kayu Kapur No.2, RT.8/RW.6, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7501270
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Laboratorium, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Lapangan, Ruang TU
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMPN 226 Jakarta.jpg" alt="SMPN 226 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        MAN 11 Jakarta Selatan
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. H. Gandun No.60, RT.12/RW.8, Lebak Bulus, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7659754
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang Kepala Sekolah, Musholla, Perpustakaan, Lab Komputer, Lab IPA, Lapangan, Taman Sekolah
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/MAN 11 Jakarta Selatan.jpg" alt="MAN 11 Jakarta Selatan" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMAN 34 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Margasatwa No.1, RT.15/RW.1, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7690064
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Ruang Guru, Ruang TU, Ruang Kepala Sekolah, Ruang BK, Ruang OSIS UKS, Masjid Baitul Ilmi, Podium besar dan kecil, Aula Besar, Perpustakaan Laboratorium, Kantin
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMAN 34 Jakarta.jpg" alt="SMAN 34 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMKN 41 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Komp. Timah No.1, RT.1/RW.3, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7512190
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Gedung Teaching Factory, Kantin, Laboratorium DKV, Studio VOCA, Ruang Aula, Front Office, Masjid, UKS
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMKN 41 Jakarta.jpg" alt="SMKN 41 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
                <div style="display: flex; border-bottom: 1px solid #ddd; align-items: center;">
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        SMAN 66 Jakarta
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Jl. Bango III No.71, RT.7/RW.3, Pondok Labu, Cilandak
                    </div>
                    <div style="flex: 2; padding: 15px; text-align: left;">
                        (021) 7691403
                    </div>
                    <div style="flex: 4; padding: 15px; text-align: left;">
                        Ruang Kelas, Perpustakaan, Laboratorium, Ruang Kepala Sekolah, Ruang Guru, Ruang Ibadah, UKS, Toilet, Lapangan, TU
                    </div>
                    <div style="flex: 1.5; padding: 15px; display: flex; align-items: center;">
                        <img src="assets/SMAN 66 Jakarta.jpg" alt="SMAN 66 Jakarta" style="height: 140px; width: 140px; border-radius: 8px; object-fit: cover; border: 1px solid #ddd;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- List of Schools End -->

    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <!-- EduFind Section -->
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>EduFind</h1>
                    </a>
                    <p class="m-0">EduFind adalah platform pendidikan yang menyediakan berbagai kursus online untuk meningkatkan keterampilan Anda. Temukan kursus terbaik dan belajar dari para ahli di berbagai bidang. Kami hadir untuk memberikan solusi pendidikan yang fleksibel dan terjangkau.</p>
                </div>
                <!-- Get In Touch Section -->
                <div class="col-md-6 mb-5" id="contact">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Pendidikan No. 123, Jakarta, Indonesia</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+62 21 1234 5678</p>
                    <p><i class="fa fa-envelope mr-2"></i>contact@edufind.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">EduFind</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/easing.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>assets/web/js/main.js"></script>
</body>

</html>