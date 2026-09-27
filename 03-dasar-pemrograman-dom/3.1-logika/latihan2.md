ALGORITMA KASIR

INPUT:
    nama barang
    harga barang
    jumlah barang

PROSES:
    total = 0

    ULANGI:
        masukkan nama barang

        JIKA nama barang = "selesai"
            hentikan pengulangan

        masukkan harga
        masukkan jumlah

        subtotal = harga × jumlah
        total = total + subtotal

    SAMPAI pengguna memilih "selesai"

OUTPUT:
    tampilkan total belanja