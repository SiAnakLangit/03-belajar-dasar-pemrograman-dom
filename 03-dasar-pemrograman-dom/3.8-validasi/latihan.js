function stokValid(input) {
    const teks = input.trim();

    return teks !== "" && /^[0-9]+$/.test(teks);
}

const data = [" 5 ", "01"];

for (const input of data) {
    console.log(
        `"${input}" =>`,
        stokValid(input) ? "valid" : "ditolak"
    );
}