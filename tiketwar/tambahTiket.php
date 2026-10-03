<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head><title>Tambah Tiket - TiketWar</title></head>
<body>
    <h1>Form Tambah Tiket</h1>

    <form action="prosesTambah.php" method="post" enctype="multipart/form-data">
        <p>
            <label>Nama Konser:</label><br>
            <input type="text" name="namaKonser" required>
        </p>
        <p>
            <label>Pilih Kategori:</label><br>
            <select name="pilihKategori" required>
                <option value="VIP">VIP</option>
                <option value="Reguler">Reguler</option>
            </select>
        </p>
        <p>
            <label>Hargas Tiket:</label><br>
            <input type="number" name="hargaTiket" min="0"   required>
        </p>

        <p>
            <label>Bukti:</label><br>
            <input type="file" name="buktiTiket" accept=".jpg,.jpeg,.png" required>
        </p>

        <button type="submit">Tambah Tiket</button>
    </form>

</body>
</html>
