# Lab11web

# Pertemuan 12
<table>
  <tr>
    <td>Nama</td>
    <td>Deni Luqmantoro</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312010071</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>TI 20 D1</td>
  </tr>
  <tr>
    <td>Matkul</td>
    <td>Pemrograman Web</td>
  </tr>
</table>

<b>Langkah-langkah Praktikum:</b>

1.	Membuat folder lab11_php_ci

![image](https://user-images.githubusercontent.com/101716699/172664509-2048a048-7cfe-4b37-9b4a-7cddfe397c20.png)
 
2.	Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.
Berikut beberapa ekstensi yang perlu diaktifkan:
• php-json ekstension untuk bekerja dengan JSON;
• php-mysqlnd native driver untuk MySQL;
• php-xml ekstension untuk bekerja dengan XML;
• php-intl ekstensi untuk membuat aplikasi multibahasa;
• libcurl (opsional), jika ingin pakai Curl.
Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian
Apache klik Config -> PHP.ini
 
![image](https://user-images.githubusercontent.com/101716699/173289689-ed7a62c5-d332-4614-b4ad-5eb5d8d16fb1.png)


Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101716699/173289847-98db785c-b873-4aeb-a456-1b422a97d552.png)

3.	Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.
•	Unduh Codeigniter dari website https://codeigniter.com/download 
•	Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
•	Ubah nama direktory framework-4.x.xx menjadi ci4.
•	Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

 ![image](https://user-images.githubusercontent.com/101716699/172665050-305736ca-bce8-457b-b165-7899e9001a7a.png)

4.	Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Kemudian arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/)
 
![image](https://user-images.githubusercontent.com/101716699/172665124-3cebdc57-cb4a-412f-a1a4-eff50211e60f.png)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:
 
![image](https://user-images.githubusercontent.com/101716699/172665173-9db9ae0e-1981-4f23-9345-6884f4fed844.png)

5.	Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk
mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan
pesan kesalahan seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/172665258-caf60f34-6081-4fbd-abfa-6650c937b1f7.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis
errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi
pada environment variable CI_ENVIRINMENT menjadi development.
Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable
CI_ENVIRINMENT menjadi development.
 
![image](https://user-images.githubusercontent.com/101716699/172665358-20b10dea-4e15-41eb-b41f-2d846e320972.png)

6.	Contoh eror
Untuk mencoba error tersebut, ubah kode pada file
app/Controller/Home.php hilangkan titik koma pada akhir kode.
 
![image](https://user-images.githubusercontent.com/101716699/172665419-ec7668c7-7a05-4ce0-966b-0802cd2a8123.png)

![image](https://user-images.githubusercontent.com/101716699/172665505-d61a8a8f-bac6-4124-87c8-642e4b41852c.png)

7.	Membuat route baru dalam Routes.php
Tambahkan kode berikut ini pada Routes.php
 
![image](https://user-images.githubusercontent.com/101716699/172666159-73729cf5-6d64-40b2-bfae-d22f1c05d06b.png)
![image](https://user-images.githubusercontent.com/101716699/172666177-5f8eca03-c057-4101-a11f-cd405ab0bcff.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

![image](https://user-images.githubusercontent.com/101716699/173296396-77f1366b-8b16-4568-b0af-9caeac20e36d.png)

8.	Membuat Controller
Kemudian membuat Controller Page. Buat file baru dengan nama page.php
pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/172666390-60ee11f5-02c8-4bf4-8ce9-1b5860813cc0.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman
sudah dapat diakses.

![image](https://user-images.githubusercontent.com/101716699/173297298-52ccd65a-6799-4b84-a200-c55a89977bf7.png)

9.	Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status
autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true
menjadi false.
 
![image](https://user-images.githubusercontent.com/101716699/172666735-186debab-c22c-48f1-bc9d-e490927a14f5.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan
alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/101716699/173297926-0013d69b-bc77-4651-a4f7-109e81b766d0.png)
 
10.	Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi
kodenya seperti berikut.
 
![image](https://user-images.githubusercontent.com/101716699/172666820-1fc2b8b5-9bc4-425e-969e-661625135354.png)

Ubah method about pada class Controller Page menjadi seperti berikut:
 
![image](https://user-images.githubusercontent.com/101716699/172666890-30f0d52f-56b4-455b-a48f-7e7278347996.png)

Kemudian lakukan refresh pada halaman tersebut.

![image](https://user-images.githubusercontent.com/101716699/173298730-5f0bbf83-c85d-4723-bcbd-d84bf7177a9b.png)

11.	Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada
codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset
css dan javascript terletak pada direktori public.
Buat file css pada direktori public dengan nama style.css (copy file dari praktikum
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![image](https://user-images.githubusercontent.com/101716699/172667488-4bb6a0f6-7a69-4adb-8e93-e76093766e1c.png)
 
Kemudian buat folder template pada direktori view kemudian buat file header.php dan
footer.php

File app/view/template/header.php
![image](https://user-images.githubusercontent.com/101716699/172692603-0dfb8580-9a66-4515-aaac-5473941fd116.png)

File app/view/template/footer.php
![image](https://user-images.githubusercontent.com/101716699/172692701-afdaa21d-f2cb-4add-a866-5aacbeaf96ec.png)

File app/view/template/about.php
![image](https://user-images.githubusercontent.com/101716699/172693026-99014cae-bbc4-4c24-978a-af599a0519c4.png)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![image](https://user-images.githubusercontent.com/101716699/173299955-cd901721-71d5-4be4-903c-549067183549.png)

<b>Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.</b>

1. halaman contact

![image](https://user-images.githubusercontent.com/101716699/173308351-ed187889-77ee-43d3-800a-0f5f5af721b1.png)
![image](https://user-images.githubusercontent.com/101716699/173308390-d2e93979-fd22-45f5-a1ff-c23fbf6d3947.png)


# Pertemuan 13

<b> Langkah - langkah Praktikum</b>

1. Membuat Database data artikel dengan nama lab_ci4

![image](https://user-images.githubusercontent.com/101716699/173310784-9899154c-7bc5-41b2-926d-6067d1f0eeaa.png)

2. Membuat tabel pada database lab_ci4

![image](https://user-images.githubusercontent.com/101716699/173311112-06d677ad-6948-434a-a441-d648f5da53c5.png)

3. Melakukan Konfigurasi koneksi database
Untuk menghubungkan dengan database server. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![image](https://user-images.githubusercontent.com/101716699/173311825-be5ad863-7219-45a8-8fb4-d725f767d44b.png)

4. Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

![image](https://user-images.githubusercontent.com/101716699/173312560-589c7d01-e8fe-4aed-80e9-24cdabbe9d28.png)

5. Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![image](https://user-images.githubusercontent.com/101716699/173336602-71de7f9b-92df-4f48-8006-e1d81939770f.png)

6. Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.

![image](https://user-images.githubusercontent.com/101716699/173336765-800f85be-6307-40ad-9030-5a549c967a76.png)
![image](https://user-images.githubusercontent.com/101716699/173337070-9f1611c5-b47a-4a0a-a1c4-bb2b77396df8.png)

7. Belum ada data yang diampilkan karena belum ada data pada tabel database. Coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

![image](https://user-images.githubusercontent.com/101716699/173337548-efc158c0-492f-4fd5-92e0-993e5f01b036.png)

Refresh kembali browser untuk melihat hasil perubahannya.

![image](https://user-images.githubusercontent.com/101716699/173803233-8602f5e0-2357-4d19-8996-15a1ee9c556e.png)

8. Membuat Tampilan Detail Artikel yaitu Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. dengan cara tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](https://user-images.githubusercontent.com/101716699/173338973-1c682c85-6691-4bb2-b469-528b68830aed.png)

9. Membuat View Detail. Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![image](https://user-images.githubusercontent.com/101716699/173339098-73cab41b-9e05-4828-9ae2-796480db86a6.png)

10. Membuat Routing untuk artikel detail, Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![image](https://user-images.githubusercontent.com/101716699/173339650-e2e0dda6-bb95-4f12-9f28-2de983c92da4.png)

Kemudian klik pada artikel 1 atau dua untuk melihat hasilnya.

![image](https://user-images.githubusercontent.com/101716699/173803723-faf7a106-54c7-4256-ba39-8e5a6aa0681c.png)

11. Membuat Menu Admin, menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![image](https://user-images.githubusercontent.com/101716699/173783134-61b5501f-0f00-4a58-a12a-0b939af609d4.png)

12. Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![image](https://user-images.githubusercontent.com/101716699/173786150-df852f41-8db4-43e6-a702-c1f38080441b.png)
![image](https://user-images.githubusercontent.com/101716699/173786171-6bf0105f-7412-49dc-b362-792afbe63d54.png)
![image](https://user-images.githubusercontent.com/101716699/173786181-532c16d3-d376-42d7-b3c7-b12f2f857e4f.png)

13. Tambahkan routing untuk menu admin seperti berikut

![image](https://user-images.githubusercontent.com/101716699/173804165-169c50d4-6bb1-43b7-8ded-c185265e0a22.png)
Akses menu admin dengan url http://localhost:8080/admin/artikel

![image](https://user-images.githubusercontent.com/101716699/173804343-8fab9fcd-2ce5-477d-990c-b820927ca0f2.png)

14. Menambah Data Artikel, tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![image](https://user-images.githubusercontent.com/101716699/173805952-4b19647e-c8fd-45e5-a130-10a69a923fe1.png)

15. Kemudian buat view untuk form tambah dengan nama form_add.php

![image](https://user-images.githubusercontent.com/101716699/173806172-758e2b04-51ba-45b5-832b-b0e0adf6d29e.png)
![image](https://user-images.githubusercontent.com/101716699/173806336-c48d6647-de99-432a-9bbc-242ad6bb7126.png)

16. Mengubah Data, tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![image](https://user-images.githubusercontent.com/101716699/173806959-efe0788f-aba1-4000-b694-8a3da0f2eed8.png)
![image](https://user-images.githubusercontent.com/101716699/173806973-c0fa4226-bb2e-4621-89ad-e1e1ddbef128.png)

17. Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://user-images.githubusercontent.com/101716699/173807750-7bcb80f5-4825-4748-8120-101b7560ed3e.png)
![image](https://user-images.githubusercontent.com/101716699/173807855-7e19bfcd-cd4a-42cb-b3ff-1f096c9c5c57.png)

18. Menghapus Data, tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![image](https://user-images.githubusercontent.com/101716699/173808436-f68c3d77-aebf-4b52-9e66-3a6b7f249500.png)

# Pertemuan 14

1. Membuat tabel user untuk login pada database lab_ci4

![image](https://user-images.githubusercontent.com/101716699/174475984-6c13a36a-b2d7-4d7d-907e-7c334e5679db.png)

2. Membuat Model User, selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php

![image](https://user-images.githubusercontent.com/101716699/174476120-019ebe0f-8d19-4b6c-b7dd-89a7891a855b.png)

3. Membuat Controller User. Buat Controller baru dengan nama User.php pada direktori app/Controllers kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.

![image](https://user-images.githubusercontent.com/101716699/174476618-14d44bbb-177f-4b17-9fd9-336e549ad054.png)
![image](https://user-images.githubusercontent.com/101716699/174476720-b27d9f0e-0a1d-41e6-82d9-da2a1b89c40a.png)

4. Membuat View Login, buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.

![image](https://user-images.githubusercontent.com/101716699/174478040-ab50afed-0dd5-4859-b98a-19b3446d5ba8.png)
![image](https://user-images.githubusercontent.com/101716699/174478046-8ba85797-3604-4016-bbd5-4f44dcf06e96.png)

5. Membuat Database Seeder. Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![image](https://user-images.githubusercontent.com/101716699/174476891-0703419f-53e8-48e9-97e5-172bfeb426a9.png)
Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![image](https://user-images.githubusercontent.com/101716699/174477081-ab19ef41-5a9d-456a-a7f2-95cd048ff3f3.png)

Selanjutnya buka kembali CLI dan ketik perintah berikut:

![image](https://user-images.githubusercontent.com/101716699/174477243-d8930c20-6aa7-49e7-9f37-b3a55eb64583.png)

6. Uji Coba Login Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/174478095-fbe20924-ed38-49ec-96b2-3e6e8d9b4730.png)

7. Menambahkan Auth Filter, selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.

![image](https://user-images.githubusercontent.com/101716699/174478620-5a359216-9937-4fbb-8b8e-c26b93659ddb.png)

8. Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![image](https://user-images.githubusercontent.com/101716699/174478710-70a2e8ec-d4a9-4fd1-ad64-158f3f8cfdfb.png)

9. Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![image](https://user-images.githubusercontent.com/101716699/174490415-d1f641b4-cb5b-4d82-bd4b-6adc732a5985.png)

10. Percobaan Akses Menu Admin, buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

![image](https://user-images.githubusercontent.com/101716699/174937365-bba4ffe8-bea6-4a9b-ba4d-3839133989c3.png)

11. Fungsi Logout, tambahkan method logout pada Controller User seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/174937609-c1bcdac0-1bf4-44f4-945f-0906a8012e46.png)

Kemudian tambahkan navbar pada admin_header seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/174938958-4ba23a85-f849-4c0e-a857-62af5a265f63.png)

Ketika kita klik navbar maka akan langsunh mengarah pada halaman login.

![image](https://user-images.githubusercontent.com/101716699/174939830-42f74973-ae6f-4ffa-9e0f-36c931ffb435.png)

