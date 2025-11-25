# TP9DPBO2425C1

# JANJI
Saya Rizka Aulia dengan NIM 2403245 mengerjakan Tugas Praktikum 9 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan

# DESAIN PROGRAM
Program ini dibagi ke beberapa bagian biar rapi dan gampang dikembangin:
1. Folder models, tempat semua yang berhubungan sama data.
- DB.php → koneksi database.
- KontrakModel.php & KontrakModelSirkuit.php → interface buat model.
- Pembalap.php & Sirkuit.php → class untuk tiap objek, ada constructor sama getter/setter.
- TabelPembalap.php & TabelSirkuit.php → tempat fungsi CRUD buat database.
2. Folder presenter, jadi penghubung antara model sama view.
- KontrakPresenter.php & KontrakPresenterSirkuit.php → interface presenter.
- PresenterPembalap.php & PresenterSirkuit.php → implementasi presenter, isinya fungsi tampilkan, tambah, ubah, hapus.
3. Folder views, bagian tampilan.
- KontrakView.php & KontrakViewSirkuit.php → interface view.
- ViewPembalap.php & ViewSirkuit.php → implementasi view, pakai template HTML buat nampilin data.
4. Folder template, file HTML buat form dan tabel.
- Form.html & FormSirkuit.html → form tambah/ubah data.
- Skin.html & SkinSirkuit.html → tampilan daftar data (tabel).
5. index.php, file utama yang menjadi pintu masuk semua request.

# ALUR PROGRAM
Program jalan kayak gini:
- User klik tombol atau link di web (misal lihat daftar pembalap atau sirkuit).
- index.php nerima request dan liat parameter screen.
- Presenter dipanggil sesuai screen:
- Kalau screen=pembalap → PresenterPembalap
- Kalau screen=sirkuit → PresenterSirkuit
- Presenter ngambil data dari model (tabelpembalap/tabelsirkuit) atau simpan/ubah/hapus data sesuai aksi user.
- Presenter kirim data ke view.
  View nge-load template HTML, masukin data, terus ditampilin ke user.

Alur Form Tambah/Ubah
- User klik Tambah atau Edit.
- View nge-load form HTML.
- Kalau form diisi, disubmit ke index.php → Presenter → Model → simpan/ubah data.
- Setelah itu, view nampilin daftar terbaru.

# DOKUMENTASI
- Pembalap
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/7b5ebca8-69d2-4407-9b0d-019c0ba6dfce" />

- Sirkuit
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/72a77685-54a6-46f9-bd02-1bca8fafdcdb" />
