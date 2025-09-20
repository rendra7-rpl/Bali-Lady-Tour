# TODO: Perbaikan Sistem Login dan Backoffice Access

## Masalah yang Ditemukan:
1. Form Login - Field email dan password tidak memiliki atribut `name`
2. Form Tambah Akun - Tidak ada field konfirmasi password
3. Keamanan - Password ditampilkan di tabel dalam bentuk plain text
4. Fitur Delete - Tidak ada fungsi hapus akun
5. Logout - Tidak ada fungsi logout
6. Route Delete - Route delete tidak ada di web.php
7. Middleware Protection - Route backoffice tidak terlindungi authentication

## Plan Perbaikan:

### 1. Perbaiki Form Login (`resources/views/Backend/login.blade.php`)
- [x] Tambahkan atribut `name` pada field email dan password
- [x] Tambahkan error handling untuk menampilkan pesan kesalahan

### 2. Perbaiki Form Tambah Akun (`resources/views/Backend/Account/add.blade.php`)
- [x] Tambahkan field konfirmasi password
- [x] Tambahkan error handling

### 3. Perbaiki Tampilan Akun (`resources/views/Backend/Account/akun.blade.php`)
- [x] Sembunyikan password dari tabel (keamanan)
- [x] Perbaiki route delete yang tidak ada
- [x] Tambahkan tombol logout

### 4. Tambah Fungsi di Controller (`app/Http/Controllers/LoginController.php`)
- [x] Tambah method `logout()`
- [x] Tambah method `deleteacc()` untuk hapus akun

### 5. Tambah Route (`routes/web.php`)
- [x] Tambah route untuk logout
- [x] Tambah route untuk delete akun

### 6. Middleware Protection
- [x] Pastikan route backoffice terlindungi dengan authentication

## Yang Sudah Selesai:
✅ Sistem login dengan atribut name yang benar
✅ Form tambah akun dengan konfirmasi password
✅ Keamanan password disembunyikan di tabel
✅ Fungsi delete akun dengan konfirmasi
✅ Fungsi logout yang aman
✅ Route delete akun
✅ Middleware protection untuk semua route backoffice
✅ Error handling di form login dan tambah akun

## Cara Testing:
1. Akses `/login` untuk halaman login
2. Login dengan akun yang valid
3. Setelah login, akses `/dashboard` untuk masuk ke backoffice
4. Akses `/akun` untuk melihat daftar akun
5. Akses `/add` untuk menambah akun baru
6. Test logout dengan mengklik tombol logout
7. Coba akses `/dashboard` tanpa login (harus redirect ke login)

## Keamanan yang Sudah Diperbaiki:
- ✅ Route backoffice terlindungi authentication middleware
- ✅ Password tidak ditampilkan di tabel
- ✅ Logout yang aman dengan session invalidation
- ✅ Delete akun dengan konfirmasi dan proteksi self-delete
- ✅ Error handling untuk validasi form
