<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Menu - Mahasiswa</title>
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
        .announcement-card {
            background-color: #eee;
            border: 3px solid #838383;
            border-radius: 10px;
        }
        .more-btn {
            display: block;
            margin: 30px auto;
            width: 200px;
            border-radius: 20px;
        }
        .placeholder-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            border-bottom: 3px solid #838383;
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
                Mahasiswa | <a id="logoutBtn" class="text-danger text-decoration-none">Logout</a>
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
                <li class="nav-item"><a href="home-mahasiswa.php" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="list-pengumuman-mhs.php" class="nav-link">Pengumuman</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
            </ul>
        </div>

        <h4 class="mb-4">Daftar Pengumuman Terbaru</h4>
        <div class="row g-4">
            <div class="col-md-3">
                <a href="isi-pengumuman-mhs.php" class="text-decoration-none text-dark">
                <div class="card announcement-card">
                    <img src="information.jpg" class="placeholder-img" alt="Pengumuman">
                    <div class="card-body">
                        <h5 class="card-title">Judul Pengumuman 1</h5>
                        <p class="card-text">Ini adalah contoh isi pengumuman yang dapat digunakan sebagai acuan...</p>
                        <p class="text-muted"><small>Dosen | dd/mm/yyyy</small></p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="isi-pengumuman-mhs.php" class="text-decoration-none text-dark">
                <div class="card announcement-card">
                    <img src="information.jpg" class="placeholder-img" alt="Pengumuman">
                    <div class="card-body">
                        <h5 class="card-title">Judul Pengumuman 2</h5>
                        <p class="card-text">Ini adalah contoh isi pengumuman yang dapat digunakan sebagai acuan...</p>
                        <p class="text-muted"><small>Dosen | dd/mm/yyyy</small></p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="isi-pengumuman-mhs.php" class="text-decoration-none text-dark">
                <div class="card announcement-card">
                    <img src="information.jpg" class="placeholder-img" alt="Pengumuman">
                    <div class="card-body">
                        <h5 class="card-title">Judul Pengumuman 3</h5>
                        <p class="card-text">Ini adalah contoh isi pengumuman yang dapat digunakan sebagai acuan...</p>
                        <p class="text-muted"><small>Dosen | dd/mm/yyyy</small></p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="isi-pengumuman-mhs.php" class="text-decoration-none text-dark">
                <div class="card announcement-card">
                    <img src="information.jpg" class="placeholder-img" alt="Pengumuman">
                    <div class="card-body">
                        <h5 class="card-title">Judul Pengumuman 4</h5>
                        <p class="card-text">Ini adalah contoh isi pengumuman yang dapat digunakan sebagai acuan...</p>
                        <p class="text-muted"><small>Dosen | dd/mm/yyyy</small></p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <a href="list-pengumuman-mhs.php" class="btn btn-outline-secondary more-btn">Selengkapnya...</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>