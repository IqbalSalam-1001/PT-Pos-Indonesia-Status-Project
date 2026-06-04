# PT Pos Indonesia Status Project

Aplikasi web **PT Pos Indonesia Status Project** untuk memantau dan mengelola status proyek—mulai dari progres, riwayat, dokumen pendukung, hingga referensi direktorat dan tahapan pengembangan. Proyek ini dirancang sebagai **portofolio standalone**: tidak memerlukan MySQL/XAMPP; cukup PHP dan file database SQLite yang sudah disertakan.

---

## Deskripsi Singkat

**PT Pos Indonesia Status Project** membantu tim mencatat proyek IT/operasional Pos Indonesia, melacak tahapan (`rproject`), menyimpan riwayat perkembangan (`hproject`), mengelola referensi dokumen (`docproject`), serta pengguna dan hak akses. Antarmuka memanfaatkan template **AdminLTE 3** (Bootstrap 4) agar dashboard mudah dibaca dan responsif.

Fitur utama:

- Autentikasi pengguna (login/logout)
- Dashboard dan menu administrasi proyek
- CRUD data proyek, direktorat, status, dan referensi
- Pelacakan progres dan histori per proyek
- Database **SQLite** terembed—siap jalan setelah clone

---

## Tech Stack

| Lapisan | Teknologi |
|--------|-----------|
| Framework | [CodeIgniter 3](https://codeigniter.com/) |
| Bahasa | PHP 8.5+ |
| Database | SQLite 3 (`application/database/database.sqlite`) |
| UI | AdminLTE 3, Bootstrap 4, jQuery, Font Awesome |
| Server dev | PHP built-in server (`php -S`) |

**Ekstensi PHP yang disarankan:** `pdo_sqlite`, `sqlite3`, `mbstring`, `openssl`

---

## Screenshots

Simpan gambar di folder [`docs/screenshots/`](docs/screenshots/), lalu ganti placeholder di bawah atau uncomment contoh Markdown.

| Login | Dashboard |
|-------|-----------|
| _Screenshot login — tempatkan di sini_ | _Screenshot dashboard — tempatkan di sini_ |

<!--
Setelah menambahkan file (mis. login.png, dashboard.png):

![Halaman Login — PT Pos Indonesia Status Project](docs/screenshots/login.png)
![Dashboard — PT Pos Indonesia Status Project](docs/screenshots/dashboard.png)
-->

---

## Persyaratan

- PHP **8.5** atau lebih baru (CLI & web)
- Git
- Ekstensi: `pdo_sqlite`, `sqlite3`

Cek ekstensi:

```bash
php -m | findstr /i sqlite
```

---

## Cara Instalasi

### 1. Clone repositori

```bash
git clone https://github.com/<username>/<repo>.git
cd pt-pos-indonesia-status-project
```

> Sesuaikan nama folder dengan nama repositori GitHub Anda.

### 2. Database SQLite

Database sudah disertakan di:

```text
application/database/database.sqlite
```

Jika file belum ada atau ingin membangun ulang dari skema:

```bash
php migrate.php
```

Skrip ini membaca `project_sqlite.sql` dan membuat ulang `application/database/database.sqlite`.

### 3. Konfigurasi (opsional)

Pastikan `application/config/config.php` sesuai URL lokal Anda:

```php
$config['base_url'] = 'http://localhost:8000/';
$config['index_page'] = '';
```

File `application/config/database.php` sudah mengarah ke SQLite via `APPPATH`.

### 4. Jalankan dengan PHP built-in server

Dari **root proyek** (folder yang berisi `index.php`):

```bash
php -S localhost:8000
```

Buka browser: **http://localhost:8000/**

Halaman default mengarah ke controller `auth` (login).

### 5. Akun demo (dari data sampel)

| Username | Keterangan |
|----------|------------|
| `psis` | Admin (level 0) |
| `orang` | Pengguna level 1 |
| `dimas` | Pengguna level 1 |

> Password disimpan sebagai hash MD5 di database. Gunakan password yang sesuai data asli Anda, atau reset lewat SQLite jika diperlukan.

---

## Struktur Penting

```text
├── application/
│   ├── config/          # config.php, database.php, routes.php
│   ├── controllers/     # Auth, Admin, ...
│   ├── database/        # database.sqlite (ikut di Git)
│   ├── cache/           # cache & session (diabaikan Git, kecuali index.html)
│   └── views/
├── docs/
│   └── screenshots/     # tempat menyimpan screenshot README
├── source/              # AdminLTE assets (CSS, JS, plugins)
├── index.php            # Front controller
├── migrate.php          # Pembuat database SQLite
├── project_sqlite.sql   # Skema + data (SQLite)
└── README.md
```

---

## Pengembangan

- Environment default: `development` (lihat `index.php`)
- Log aplikasi: `application/logs/` (tidak di-commit)
- Cache/session: `application/cache/` (tidak di-commit)

---

## Lisensi

Proyek aplikasi: sesuaikan dengan kebijakan organisasi Anda.

CodeIgniter 3 dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT). AdminLTE memiliki lisensi terpisah—lihat dokumentasi AdminLTE.

---

## Kontak / Portofolio

<!-- Isi profil Anda di bawah ini -->

- **Nama:** IqbalSalamRobani
- **GitHub:** _https://github.com/IqbalSalam-1001
