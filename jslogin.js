document.getElementById('loginForm').addEventListener('submit', function(event) {event.preventDefault();
let userId = document.getElementById('userId').value;
let userPassword = document.getElementById('userPassword').value;
let valid = true;
if (userId === '' && userPassword.length < 8) {
    document.getElementById('usernameError').style.display = 'block';
    document.getElementById('passwordError').style.display = 'block';
    valid = false;
} else if (userId === 'mahasiswa' && userPassword === 'mahasiswa') {
    document.getElementById('usernameError').style.display = 'none';
    alert('Login Berhasil, Selamat Datang Mahasiswa')
    window.location.href = 'home-mahasiswa.php';
} else if (userId === 'dosen' && userPassword === 'admin123') {
    document.getElementById('usernameError').style.display = 'none';
    alert('Login Berhasil, Selamat Datang Dosen')
    window.location.href = 'home-dosen.php';
} else {
    alert('User ID dan Password Salah !!!')
}
});