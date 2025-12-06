<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengumuman Baru</title>
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
        textarea {
            min-height: 200px;
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
                <li class="nav-item"><a href="home-dosen.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="list-pengumuman-dosen.php" class="nav-link">Pengumuman</a></li>
                <li class="nav-item"><a href="buat-pengumuman.php" class="nav-link active">Buat Pengumuman</a></li>
                <li class="nav-item"><a href="edit-pengumuman.php" class="nav-link">Edit Pengumuman</a></li>
            </ul>
        </div>

        <h4 class="mb-4">Buat Pengumuman Baru</h4>
        <form>
            <div class="mb-3">
                <label class="form-label">Judul Pengumuman :</label>
                <input type="text" class="form-control" placeholder="Masukkan judul pengumuman" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Lampirkan Gambar (Optional) :</label>
                <input type="file" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Isi Pengumuman :</label>
                <textarea class="form-control" rows="12" placeholder="Masukkan isi pengumuman" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary me-2" formaction="#">Upload</button>
            <a href="#" class="btn btn-outline-secondary">Batalkan</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>