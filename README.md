<p align="center">
   <img src="public\img\icon\uskLogo.png" alt="Logo USK" width="120px">
</p>

# D'AsLab

MengHeal menyediakan sarana untuk konsultasi mengenai permasalahan kesehatan mental pada remaja kisaran usia 12 sampai 18 tahun.

## About

Repositori ini berisi mengenai project matakuliah Rekayasa Perangkat Lunak, dengan nama project MengHeal. Project ini mengambil tema mengenai Mental Health dikalangan remaja.

## How to run

1. Clone repositori ini terlebih dahulu di dalam folder htdocs jika memakai XAMPP.
    ```
    $ git clone https://github.com/Ikhsans4/DAsLab.git
    ```
2. Masuk ke dalam folder yang telah diclone.
    ```
    $ cd DAsLab
    ```
3. Jalankan Composer Install.
    ```
    $ composer install
    ```
4. Hidupkan key generate.
    ```
    $ php artisan key:generate
    ```
5. Copy file **.env.example** dan save as menjadi **.env**.
6. Di dalam file **.env** ubahlah value dari:  
   note: tanpa tanda kutip

    ```
    DB_DATABASE = daslab
    ```

7. Sebelum Melakukan migrasi, Buatlah terlebih dahulu database daslab dengan menggunakan aplikasi RDBMS yang anda punya dengan query berikut:
    ```
    CREATE DATABASE daslab;
    ```
8. Untuk Mengisi tabel beserta data-datanya (Migrasi database) jalankan perintah berikut:
    ```
    $ php artisan migrate:fresh --seed
    ```
9. Hidupkan server aplikasinya dengan cara sebagai berikut:

```
$ php artisan serve
```

## Team Member
-   M. Ikhsan Fikri (2008107010020)
-   Daffa Mudhaffar (2008107010013)

## License

Semua yang terdapat didalam repositori ini hanya digunakan untuk sarana pembelajaran dan tidak untuk diperjual belikan.
