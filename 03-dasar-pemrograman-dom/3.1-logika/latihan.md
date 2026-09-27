ALGORITMA PENENTUAN NILAI

INPUT:
    nama
    nilai

PROSES:
    JIKA nilai >= 90 DAN nilai <= 100
        kategori = "Sangat Baik"
    JIKA TIDAK, JIKA nilai >= 80
        kategori = "Baik"
    JIKA TIDAK, JIKA nilai >= 75
        kategori = "Cukup"
    JIKA TIDAK
        kategori = "Perlu Belajar"

OUTPUT:
    tampilkan nama
    tampilkan nilai
    tampilkan kategori