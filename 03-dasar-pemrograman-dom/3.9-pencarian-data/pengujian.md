# Pengujian Program Pencarian

## Data Awal

Program menggunakan lima data demonstrasi:

| No. | Nama       | Kategori    |
| --- | ---------- | ----------- |
| 1   | Keyboard   | Perangkat   |
| 2   | Headset    | Audio       |
| 3   | Kamera     | Perangkat   |
| 4   | Kabel HDMI | Aksesori    |
| 5   | Flashdisk  | Penyimpanan |

---

## Pengujian 1 — Kata Ditemukan

### Input

```text
Cari barang: keyboard
```

### Hasil yang Diharapkan

Program menampilkan barang Keyboard beserta kategorinya.

### Hasil Aktual

```text
Hasil pencarian:
- Keyboard | Perangkat
```

### Status

**LULUS**

---

## Pengujian 2 — Input Kosong

### Input

```text
Cari barang:
```

### Hasil yang Diharapkan

Program menolak pencarian kosong.

### Hasil Aktual

```text
Pencarian tidak boleh kosong.
```

### Status

**LULUS**

---

## Pengujian 3 — Kata Tidak Ditemukan

### Input

```text
Cari barang: Printer
```

### Hasil yang Diharapkan

Program menampilkan pesan bahwa barang tidak ditemukan.

### Hasil Aktual

```text
Barang tidak ditemukan.
```

### Status

**LULUS**

---

## Pengujian 4 — Data Kosong

### Kondisi

Seluruh data barang dikosongkan.

Contoh:

```javascript
const barang = [];
```

### Input

```text
Cari barang: keyboard
```

### Hasil yang Diharapkan

Program tidak mengalami error dan menampilkan bahwa barang tidak ditemukan.

### Hasil Aktual

```text
Barang tidak ditemukan.
```

### Status

**LULUS**

---

## Kesimpulan

Program berhasil diuji menggunakan empat kondisi:

* Kata ditemukan
* Input kosong
* Kata tidak ditemukan
* Data kosong

Keempat pengujian menghasilkan keluaran sesuai dengan kondisi yang diharapkan.
