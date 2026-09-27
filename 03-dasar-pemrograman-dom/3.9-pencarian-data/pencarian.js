const readline = require("readline");

const barang = [
    {
        nama: "Keyboard",
        kategori: "Perangkat"
    },
    {
        nama: "Headset",
        kategori: "Audio"
    },
    {
        nama: "Kamera",
        kategori: "Perangkat"
    },
    {
        nama: "Kabel HDMI",
        kategori: "Aksesori"
    },
    {
        nama: "Flashdisk",
        kategori: "Penyimpanan"
    }
];

function cariBarang(data, kata) {
    return data.filter(item =>
        item.nama.toLowerCase().includes(kata.toLowerCase())
    );
}

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question("Cari barang: ", (input) => {
    const kata = input.trim();

    if (kata === "") {
        console.log("Pencarian tidak boleh kosong.");
        rl.close();
        return;
    }

    const hasil = cariBarang(barang, kata);

    if (hasil.length === 0) {
        console.log("Barang tidak ditemukan.");
    } else {
        console.log("Hasil pencarian:");

        for (const item of hasil) {
            console.log(
                `- ${item.nama} | ${item.kategori}`
            );
        }
    }

    rl.close();
});