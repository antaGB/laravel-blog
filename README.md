## Website Blog dengan Laravel

Ini adalah proyek website blog yang dibangun menggunakan Laravel. Proyek ini memiliki beberapa fitur utama, termasuk:

- Fitur otentikasi pengguna (authentication) untuk login dan registrasi.
- Dashboard admin untuk mengelola postingan blog.
- Fungsi CRUD (Create, Read, Update, Delete) untuk postingan blog.

### Instalasi

1. Pastikan Anda telah menginstal [Composer](https://getcomposer.org/) dan [Node.js](https://nodejs.org/) di sistem Anda.

2. Clone repositori ini ke dalam direktori lokal Anda:
   ```
   git clone https://github.com/antaGB/laravel-blog.git
   ```
3. Masuk ke direktori proyek:
   ```
   cd laravel-blog
   ```

4. Install dependensi PHP menggunakan Composer:    
    ```
    composer install
    ```

5. Install dependensi front-end menggunakan npm:
    ```
    npm install
    ```

6. Salin file `.env.example` menjadi `.env` dan atur konfigurasi database dan lainnya sesuai kebutuhan:
    ```
    cp .env.example .env
    ```

7. Generate application key:
    ```
    php artisan key:generate
    ```

8. Jalankan migrasi dan pengisian data awal:
    ```
    php artisan migrate --seed
    ```

9. Jalankan server lokal untuk melihat website blog:
    ```
    php artisan serve
    ```


### Penggunaan

- Kunjungi halaman utama untuk melihat daftar postingan blog.

- Untuk mengelola postingan blog, login sebagai admin menggunakan akun yang telah Anda daftarkan sebelumnya.

- Setelah login, Anda akan diarahkan ke halaman Dashboard admin. Di sini, Anda dapat membuat, mengedit, atau menghapus postingan blog.

### Struktur Folder

- `app/`: Berisi file-file terkait aplikasi Laravel.
- `resources/views/`: Berisi file-file tampilan (views) website.
- `routes/`: Berisi file-file rute URL aplikasi.
- `public/`: Berisi file-file publik seperti CSS, JavaScript, dan gambar.

### Kontribusi

Jika Anda menemukan bug atau ingin berkontribusi pada proyek ini, silakan buat *pull request* atau laporkan masalah di halaman *Issues*.

### Lisensi

Anda bebas menggunakan proyek ini untuk keperluan pribadi maupun komersial.

---

Terima kasih 

