<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: white;
        }
        .header-bar {
            background-color: #131313;
            padding: 15px 0;
        }
        .logo { 
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60px;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            display: block;
        }
        .m-3 {
            color: white;
            font-weight: 700;
        }
        .user-info {
            font-weight: 600;
            color: white;
        }
        .tab-menu .nav-link {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
            color: black;
        }
        .tab-menu .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }
        .containers {
            margin-bottom: 20px;
        }
        .placeholder-main {
            width: 100%;
            height: 300px;
            object-fit: cover;
            background-color: #ccc;
        }
        .placeholder-small {
            width: 100%;
            height: 100px;
            object-fit: cover;
            background-color: #ccc;
        }
        .sidebar-item {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="logosapa1.png" alt="Logo" class="logo">
                <h4 class="m-3">Sistem Pengumuman Akademik</h4>
            </div>
            <div class="user-info">
                Dosen | <a id="logoutBtn" class="text-danger text-decoration-none">Logout</a>
            </div>
        </div>
    </div>
    <script>
    const logoutLink = document.getElementById('logoutBtn');
    logoutLink.addEventListener('click', function() {
        alert('Anda telah logout.');
        window.location.href = 'landing-page.php';
    });
    </script>

    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <ul class="nav tab-menu mb-3">
                <li class="nav-item"><a href="home-dosen.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="list-pengumuman-dosen.php" class="nav-link active">Pengumuman</a></li>
                <li class="nav-item"><a href="buat-pengumuman.php" class="nav-link">Buat Pengumuman</a></li>
                <li class="nav-item"><a href="edit-pengumuman.php" class="nav-link">Edit Pengumuman</a></li>
            </ul>
        </div>

        <div class="row mt-3">
            <div class="containers mt-3">
                <a href="list-pengumuman-dosen.html" class="btn btn-outline-secondary more-btn"> < Kembali </a>
            </div>
            <div class="col-md-8">
                <h3>Judul Pengumuman</h3>
                <p class="text-muted">Dosen | dd/mm/yyyy</p>
                <img src="information.jpg" class="placeholder-main mb-3" alt="Gambar Pengumuman">
                
                <p>
                    Ini adalah contoh isi pengumuman yang dapat digunakan sebagai acuan dalam menyampaikan informasi penting di lingkungan kampus. Pengumuman berfungsi untuk memberikan pemberitahuan resmi kepada mahasiswa, dosen, dan seluruh civitas akademika mengenai kegiatan, jadwal, atau hal-hal administratif yang perlu diperhatikan. Dalam penyusunannya, pengumuman sebaiknya dibuat dengan bahasa yang jelas, formal, dan mudah dipahami agar pesan yang ingin disampaikan dapat diterima dengan baik oleh seluruh pihak yang berkepentingan.
                </p>
                <p>
                    Selain itu, isi pengumuman juga harus mencantumkan informasi yang lengkap seperti tanggal pelaksanaan, tempat kegiatan, pihak yang mengeluarkan pengumuman, serta langkah-langkah yang perlu dilakukan oleh penerima informasi. Dengan adanya contoh isi pengumuman, diharapkan mahasiswa dapat memahami bagaimana bentuk dan struktur pengumuman yang baik, serta mampu membuat atau menyebarkan informasi kampus secara efektif dan profesional.
                </p>
            </div>
            <div class="col-md-4">
                <div class="sidebar-item d-flex">
                    <a href="isi-pengumuman-dosen.php" class="text-decoration-none text-dark">
                    <img src="information.jpg" class="placeholder-small me-2" alt="">
                    <div>
                        <strong>Judul Pengumuman 1</strong><br>
                        <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                        <small>Dosen | dd/mm/yyyy </small>
                    </div>
                </div>
                <div class="sidebar-item d-flex">
                    <a href="isi-pengumuman-dosen.php" class="text-decoration-none text-dark">
                    <img src="information.jpg" class="placeholder-small me-2" alt="">
                    <div>
                        <strong>Judul Pengumuman 2</strong><br>
                        <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                        <small>Dosen | dd/mm/yyyy </small>
                    </div>
                </div>
                <div class="sidebar-item d-flex">
                    <a href="isi-pengumuman-dosen.php" class="text-decoration-none text-dark">
                    <img src="information.jpg" class="placeholder-small me-2" alt="">
                    <div>
                        <strong>Judul Pengumuman 3</strong><br>
                        <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                        <small>Dosen | dd/mm/yyyy </small>
                    </div>
                </div>
                <div class="sidebar-item d-flex">
                    <a href="isi-pengumuman-dosen.php" class="text-decoration-none text-dark">
                    <img src="information.jpg" class="placeholder-small me-2" alt="">
                    <div>
                        <strong>Judul Pengumuman 4</strong><br>
                        <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                        <small>Dosen | dd/mm/yyyy </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html