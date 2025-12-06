<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Edit Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
        .placeholder-img {
            width: 120px;
            height: 100px;
            object-fit: cover;
            background-color: #ccc;
        }
        .announcement-item {
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
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
                <li class="nav-item"><a href="list-pengumuman-dosen.php" class="nav-link">Pengumuman</a></li>
                <li class="nav-item"><a href="buat-pengumuman.php" class="nav-link">Buat Pengumuman</a></li>
                <li class="nav-item"><a href="edit-pengumuman.php" class="nav-link active">Edit Pengumuman</a></li>
            </ul>
        </div>
        <h4 class="mb-4">Edit Pengumuman</h4>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 1</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 2</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 3</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 4</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 5</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 6</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 7</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
        <div class="announcement-item d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center">
                <img src="information.jpg" class="placeholder-img me-3" alt="">
                <div>
                    <strong>Judul Pengumuman 8</strong><br>
                    <small>Ini adalah contoh isi pengumuman yang dapat....</small><br>
                    <small>Dosen | dd/mm/yyy</small>
                </div>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn btn-outline-primary me-2">Edit</a>
                <a href="#" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>