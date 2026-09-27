function barangTersedia(data) {
    const hasil = [];

    for (const item of data) {
        if (item.stok > 0) {
            hasil.push(item);
        }
    }

    return hasil;
}

const daftarBarang = [
    { nama: "Pulpen", stok: 5 },
    { nama: "Buku", stok: 0 },
    { nama: "Stabilo", stok: 3 }
];

console.log(barangTersedia(daftarBarang));