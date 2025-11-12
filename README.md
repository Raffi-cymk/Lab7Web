# Lab7Web
## Tujuan Praktikum
1. Memahami konsep dasar **Server-Side Scripting**.  
2. Mempelajari dasar pemrograman **PHP**.  
3. Memahami variabel, tipe data, struktur kondisi, dan perulangan di PHP.  
4. Mampu membuat program PHP sederhana berbasis form input.

---

## Persiapan Lingkungan
- Menggunakan **XAMPP** (Apache + PHP).  
- Direktori kerja: `D:\xampp\htdocs\lab7_php_dasar` (atau `htdocs/lab7_php_dasar` pada instalasi lokal).  
- Editor: Visual Studio Code (atau editor teks lain).

---

## Isi Repository
Semua file latihan yang dijalankan pada praktikum ini telah diunggah ke repository. Daftar file utama:
- `php_dasar.php`  
- `latihan1.php`  
- `latihan2.php`  
- `operator.php`  
- `kondisi_if.php`  
- `switch.php`  
- `for.php`  
- `while.php`  
- `dowhile.php`  
- `form_gaji.php` (tugas akhir)

---

## Penjelasan Singkat Setiap File
- **php_dasar.php** — Pengenalan PHP: menampilkan teks dasar (`Hello World`).  
- **latihan1.php** — Demonstrasi variabel (NIM, Nama).  
- **latihan2.php** — Form input sederhana (metode POST) menampilkan pesan selamat datang.  
- **operator.php** — Contoh operasi aritmetika: perhitungan pajak dan gaji bersih.  
- **kondisi_if.php** — Struktur `if`/`elseif`/`else` untuk menampilkan nama hari.  
- **switch.php** — Struktur `switch-case` untuk nama hari.  
- **for.php** — Perulangan `for` naik (1→10) dan turun (10→1).  
- **while.php** — Perulangan `while` menampilkan angka 1→10.  
- **dowhile.php** — Perulangan `do-while` menampilkan angka 1→10.  
- **form_gaji.php** — Tugas akhir: form menerima Nama, Tanggal Lahir, Pekerjaan → menampilkan umur, pekerjaan, dan gaji sesuai pilihan.

> **Catatan penting:** Semua kode telah diuji berjalan di server lokal (XAMPP) sebelum diunggah ke repository.

---

## Keterangan Screenshot (Total: 11)
> **Penting:** Screenshot #1 adalah **halaman index (tampilan awal web)** yang menunjukkan daftar 10 file latihan. Jadi keseluruhan ada 11 screenshot: satu index + 10 screenshot hasil jalannya masing-masing file / tampilan penting.

1. **Screenshot 1** — Halaman index (`index`): tampilan awal di browser yang menampilkan daftar 10 file latihan (sebagai navigasi).  
<img width="808" height="544" alt="Screenshot 2025-11-12 125718" src="https://github.com/user-attachments/assets/c88978ef-1edb-419e-b2b3-1d90932ebf07" />

2. **Screenshot 2** — `php_dasar.php` — tampilan "Hello World".  
<img width="489" height="252" alt="Screenshot 2025-11-12 102645" src="https://github.com/user-attachments/assets/e26ba739-98df-48c2-9af0-d0964f3eccd1" />

3. **Screenshot 3** — `latihan1.php` — output NIM & Nama.  
<img width="434" height="204" alt="Screenshot 2025-11-12 102841" src="https://github.com/user-attachments/assets/bb120999-cf7e-4f77-9148-ecacae316087" />

4. **Screenshot 4** — `latihan2.php` — form input dan hasil ketika data dikirim.  
<img width="498" height="239" alt="Screenshot 2025-11-12 103015" src="https://github.com/user-attachments/assets/7eac836d-f570-413f-9c81-8443d6352827" />

5. **Screenshot 5** — `operator.php` — hasil perhitungan gaji & pajak.  
<img width="479" height="201" alt="Screenshot 2025-11-12 105536" src="https://github.com/user-attachments/assets/77a0dd61-9331-4565-9103-651bdfec5268" />

6. **Screenshot 6** — `kondisi_if.php` — output struktur IF (nama hari).  
<img width="455" height="148" alt="Screenshot 2025-11-12 105900" src="https://github.com/user-attachments/assets/b6e30bca-6193-4579-8d8e-1ed92ff772fa" />

7. **Screenshot 7** — `switch.php` — output struktur SWITCH (nama hari).  
<img width="510" height="148" alt="Screenshot 2025-11-12 122822" src="https://github.com/user-attachments/assets/c387ae6e-6700-4fd6-929d-3f932d8b6431" />

8. **Screenshot 8** — `for.php` — hasil perulangan naik dan turun.  
<img width="608" height="484" alt="Screenshot 2025-11-12 123144" src="https://github.com/user-attachments/assets/8507c293-2af6-438b-8611-b0c37e947c65" />

9. **Screenshot 9** — `while.php` — hasil perulangan WHILE.  
<img width="430" height="314" alt="Screenshot 2025-11-12 123722" src="https://github.com/user-attachments/assets/97cf55f1-747f-4d89-bbd1-ab0cde44cc4c" />

10. **Screenshot 10** — `dowhile.php` — hasil perulangan DO-WHILE.  
<img width="489" height="270" alt="Screenshot 2025-11-12 123954" src="https://github.com/user-attachments/assets/9f105c1c-fc56-46d6-bd65-acb53f7694f1" />

11. **Screenshot 11** — `form_gaji.php` — tampilan form tugas akhir dan/atau hasil perhitungan umur & gaji.
<img width="492" height="436" alt="Screenshot 2025-11-12 103243" src="https://github.com/user-attachments/assets/5cffa124-b3a0-4f5b-a38f-c3928c7585f3" />


---

## Cara Menjalankan (untuk penguji / reviewer)
1. Pastikan **Apache** di XAMPP berjalan.  
2. Salin folder `lab7_php_dasar` ke `htdocs`.  
3. Buka browser dan akses:
   - `http://localhost/lab7_php_dasar/` → akan tampil index (Screenshot 1).  
   - Klik file yang ingin dijalankan, mis. `operator.php` → `http://localhost/lab7_php_dasar/operator.php`.

---

## Hasil & Kesimpulan
- Semua latihan menunjukkan pemahaman dasar PHP: variabel, input form, kondisi, operator, dan perulangan.  
- Praktikum ini mempersiapkan dasar yang dibutuhkan untuk pengembangan web dinamis dan integrasi dengan database pada praktikum selanjutnya.

---

## Lampiran
- Semua file kode PHP ada di repository (versi final).  
- Terdapat 11 screenshot sebagai bukti hasil eksekusi (Screenshot #1 = index + 10 hasil file).
