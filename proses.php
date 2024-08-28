<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set("Asia/Jakarta");
    $nama = ($_POST['nama']);
    $nohp = ($_POST['nohp']);
    $tanggal = ($_POST['tanggal']);
    $hairstyle = ($_POST['hairstyle']);
    $timestamp = date("Y-m-d H:i:s");

    // File untuk menyimpan nomor antrian terakhir
    $count_my_page = "hitcounter.txt";

    // Membaca nomor antrian terakhir
    if (file_exists($count_my_page)) {
        $hits = (int)file_get_contents($count_my_page);
        $hits++;
    } else {
        $hits = 1;
    }

    // Menyimpan nomor antrian baru
    file_put_contents($count_my_page, $hits);

    // Data yang akan disimpan
    $data = "Nomor Antrian: $hits\nNama: $nama\nNo. HP: $nohp\nTanggal: $tanggal\nPotongan Rambut: $hairstyle\nWaktu: $timestamp\n\n";

    // Simpan data antrian ke dalam file antrian.txt
    $antrianFile = "antrian.txt";
    $file = fopen($antrianFile, "a");
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Data berhasil disimpan.";
    } else {
        echo "Data gagal disimpan.";
    }
}
?>
