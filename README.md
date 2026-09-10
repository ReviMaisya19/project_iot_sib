# Project IoT SIB — Sistem Monitoring Lingkungan

Aplikasi web berbasis **Laravel** yang terhubung ke perangkat IoT melalui protokol **MQTT** untuk memantau kondisi lingkungan secara real-time. Data sensor dari perangkat dikirim ke broker MQTT, kemudian diteruskan dan diolah oleh backend Laravel, serta dapat diakses melalui REST API (diuji menggunakan **Postman**).

## Fitur Utama

- 📡 Menerima data sensor secara real-time melalui protokol MQTT
- 🌡️ Monitoring **suhu** (Temperature)
- 💧 Monitoring **kelembapan udara** (Humidity)
- 🌱 Monitoring **kelembapan tanah** (Soil Moisture)
- ☀️ Monitoring **intensitas cahaya** (Light Intensity)
- 🔌 REST API untuk mengakses data sensor
- 📊 Penyimpanan data sensor ke database untuk keperluan monitoring/riwayat

## Tech Stack

- **Backend:** Laravel (PHP)
- **Komunikasi IoT:** MQTT
- **Database:** MySQL / MariaDB
- **API Testing:** Postman
- **Frontend:** Blade / Bootstrap

## Struktur API

Beberapa endpoint utama yang tersedia:

| Controller | Fungsi |
|---|---|
| `SensorController` | Endpoint umum untuk data sensor |
| `TemperatureController` | Data suhu |
| `HumidityController` | Data kelembapan udara |
| `MoistureController` | Data kelembapan tanah |
| `IntensityController` | Data intensitas cahaya |

## Cara Menjalankan Project

1. Clone repository ini
   ```bash
   git clone https://github.com/ReviMaisya19/project_iot_sib.git
   cd project_iot_sib
   ```
2. Install dependency
   ```bash
   composer install
   ```
3. Salin file environment dan sesuaikan konfigurasi database & MQTT broker
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Jalankan migrasi database
   ```bash
   php artisan migrate
   ```
5. Jalankan server lokal
   ```bash
   php artisan serve
   ```

## Konteks Project

Project ini dikembangkan sebagai bagian dari program magang IoT Developer (MSIB Batch 6 Kampus Merdeka).

## Lisensi

Project ini dibuat untuk keperluan pembelajaran/akademik.
