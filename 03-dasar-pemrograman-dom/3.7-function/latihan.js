const barang = [
    { nama: "Spidol", stok: 4 },
    { nama: "Map", stok: 2 },
    { nama: "Penghapus", stok: 0 },
    { nama: "Penggaris", stok: 3 }
];

function cariNama(data, nama) {
    const hasil = [];

    for (const item of data) {
        if (item.nama.toLowerCase() === nama.toLowerCase()) {
            hasil.push(item);
        }
    }

    return hasil;
}

const hasil = cariNama(barang, "Penggaris");

console.log("Hasil pencarian:");
console.log(hasil);