function diskonValid(input) {
    const teks = input.trim();

    if (teks === "") {
        return false;
    }

    if (!/^[0-9]+$/.test(teks)) {
        return false;
    }

    const nilai = Number(teks);

    return nilai >= 0 && nilai <= 100;
}

const pengujian = [
    "5",
    "25",
    "75",
    "100",
    "101",
    "",
    "abc"
];

for (const input of pengujian) {
    console.log(
        `"${input}" =>`,
        diskonValid(input) ? "valid" : "ditolak"
    );
}