# Web Pemesanan Makanan

Project Website ini dirancang untuk mempermudah proses pemesanan (makanan, minuman, cake, dan dessert) secara online di restoran/kafe. Pengguna dapat dengan mudah memilih menu berdasarkan kategori, memesan langsung melalui QR Code di meja, dan melakukan pembayaran secara online menggunakan Payment Gateway Xendit.

## Teknologi yang Digunakan

- **Laravel 11**: Framework PHP yang digunakan untuk membangun aplikasi web ini.

- **Livewire**: Framework full-stack untuk Laravel yang digunakan untuk membangun antarmuka pengguna yang dinamis tanpa perlu menulis JavaScript.

- **MySQL**: Sistem manajemen basis data relasional yang digunakan untuk menyimpan data aplikasi.

- **Xendit**: Sistem pembayaran online yang sudah menggunakan payment gateway

## Fitur

1. **Cari Berdasarkan**:

    - Promo Hari Ini (Today's Promo)
    - Makanan Favorit (Food Favorite)
    - Nama Menu

2. **Pesan Melalui QR Code**:

    - Pengguna dapat memesan makanan langsung melalui QR Code yang tersedia di meja.

3. **Pembayaran Online**:
    - Pembayaran dapat dilakukan secara online menggunakan Payment Gateway Xendit.

## Instalasi

1. Clone repository ini:

    ```bash
    git clone https://github.com/luthfihalimii/Web-Pesan-Makanan.git
    cd Web-Pesan-Makanan
    ```

2. Install dependencies menggunakan Composer:

    ```bash
    composer install
    ```

3. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:

    ```bash
    cp .env.example .env
    ```

4. Generate aplikasi key:

    ```bash
    php artisan key:generate
    ```

5. Migrasi dan seed database:

    ```bash
    php artisan migrate --seed
    ```

6. Jalankan aplikasi:

    ```bash
    php artisan serve
    ```

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan fork repository ini dan buat pull request dengan perubahan yang Anda lakukan.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.
