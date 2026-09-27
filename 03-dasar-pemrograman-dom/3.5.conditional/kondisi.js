const nilai = 94;

if (nilai < 0 || nilai > 100) {
    console.log("Tidak valid");
} else if (nilai >= 90) {
    console.log("Sangat baik");
} else if (nilai >= 75) {
    console.log("Lulus");
} else {
    console.log("Belajar lagi");
}