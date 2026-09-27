# Perencanaan Program Pencarian Data

## IPO

### Input

* Kata yang ingin dicari dari terminal.
* Data barang yang berisi nama dan kategori.

### Process

1. Menerima kata pencarian dari pengguna.
2. Menghapus spasi berlebih pada input.
3. Memeriksa apakah input kosong.
4. Jika input tidak kosong, mencari kata pada field `nama`.
5. Menampilkan semua data yang sesuai.
6. Jika tidak ada data yang sesuai, menampilkan pesan bahwa barang tidak ditemukan.

### Output

* Daftar barang yang sesuai dengan kata pencarian.
* Pesan bahwa pencarian tidak boleh kosong jika input kosong.
* Pesan bahwa barang tidak ditemukan jika tidak ada data yang cocok.

## Pseudocode

```text
MULAI

Simpan lima data barang
Setiap data memiliki:
    nama
    kategori

Tampilkan pertanyaan pencarian
Terima input pengguna

Hapus spasi di awal dan akhir input

JIKA input kosong
    Tampilkan "Pencarian tidak boleh kosong"
    SELESAI

Buat daftar hasil kosong

UNTUK setiap barang
    JIKA nama barang mengandung kata pencarian
        Masukkan barang ke daftar hasil
    AKHIR JIKA
AKHIR UNTUK

JIKA daftar hasil kosong
    Tampilkan "Barang tidak ditemukan"
JIKA TIDAK
    Tampilkan semua barang yang ditemukan
AKHIR JIKA

SELESAI
```
