let total = 0;
const hargaPensil = 2000;
const jumlahPensil = 5;

for (let nomor = 1; nomor <= jumlahPensil; nomor++) {
    total += hargaPensil;
}

console.log("Jumlah pensil:", jumlahPensil);
console.log("Harga satuan :", hargaPensil);
console.log("Total        :", total);