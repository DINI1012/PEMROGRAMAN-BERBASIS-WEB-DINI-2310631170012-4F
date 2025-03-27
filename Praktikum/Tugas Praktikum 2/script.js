function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nilai = parseFloat(document.getElementById("nilai").value);
    let hasil = document.getElementById("hasil");

    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil.style.color = "red";
        hasil.textContent = "Nilai tidak valid!";
        return;
    }

    let hurufMutu;
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    hasil.style.color = "green";
    hasil.textContent = `NIM: ${nim} | Nilai: ${nilai} | Huruf Mutu: ${hurufMutu}`;
}
