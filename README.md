# Lab11web

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

Langkah-langkah Praktikum:

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
 
![image](https://user-images.githubusercontent.com/101716699/172664864-5a76cd3a-d3f7-4a73-ab7a-21e45afbe1b0.png)

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

 ![image](https://user-images.githubusercontent.com/101716699/172664967-8f6b65b7-ba19-4237-ab89-768df281bb57.png)

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

![image](https://user-images.githubusercontent.com/101716699/172666278-c6c0f347-8ef6-4948-b41c-7cdc69de2da2.png)

8.	Membuat Controller
Kemudian membuat Controller Page. Buat file baru dengan nama page.php
pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/172666390-60ee11f5-02c8-4bf4-8ce9-1b5860813cc0.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman
sudah dapat diakses.

![image](https://user-images.githubusercontent.com/101716699/172666565-f056820c-1947-4fea-af18-eb878ddad0d1.png)

9.	Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status
autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true
menjadi false.
 
![image](https://user-images.githubusercontent.com/101716699/172666735-186debab-c22c-48f1-bc9d-e490927a14f5.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan
alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/101716699/172666766-14c60270-73d0-4553-9939-72fed979541c.png)
 
10.	Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi
kodenya seperti berikut.
 
![image](https://user-images.githubusercontent.com/101716699/172666820-1fc2b8b5-9bc4-425e-969e-661625135354.png)

Ubah method about pada class Controller Page menjadi seperti berikut:
 
![image](https://user-images.githubusercontent.com/101716699/172666890-30f0d52f-56b4-455b-a48f-7e7278347996.png)

Kemudian lakukan refresh pada halaman tersebut.

![image](https://user-images.githubusercontent.com/101716699/172666957-a9763d8c-b39e-456d-b63f-39917c6c6173.png)

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

![image](https://user-images.githubusercontent.com/101716699/172707180-e68cde47-95b1-40eb-b4d7-ce67e8cdb315.png)





