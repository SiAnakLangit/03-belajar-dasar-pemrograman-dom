function cekStok(stok) {
    if (stok < 0) {
        return "Tidak valid";
    } else if (stok === 0) {
        return "Habis";
    } else {
        return "Tersedia";
    }
}

console.log("-1:", cekStok(-1));
console.log("0 :", cekStok(0));
console.log("1 :", cekStok(1));
console.log("100:", cekStok(100));