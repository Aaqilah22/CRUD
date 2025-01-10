<h2 style="text-align: center;">Data Makanan</h2>
<style>
/* Gaya untuk card */
.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 23px auto;
    padding: 20px;
    background-color: #fff;
}

/* Header card */
.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

.card-header h5 {
    margin: 0;
    font-size: 1.25rem;
}

/* Link Tambah Data */
.add-data-link {
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.add-data-link:hover {
    background-color: #0056b3;
}

/* Gaya tabel */
table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 14px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

table th {
    background-color: #f4f4f4;
    font-weight: bold;
    text-align: center;
}

table td.text-center {
    text-align: center;
}

/* Warna baris zebra */
table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

/* Hover efek pada baris */
table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Gaya teks total */
p {
    margin-top: 15px;
    font-weight: bold;
    color: #333;
}

/* Link edit dan hapus */
a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

/* Konfirmasi tombol hapus */
a[onclick] {
    color: #dc3545;
}

a[onclick]:hover {
    color: #a71d2a;
}
</style>


<!-- Link Tambah Data Baru -->
<a href="?page=makananAdd" class="add-data-link">[+] Tambah Data Baru</a>

<!-- Tabel Data Makanan -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Makanan</th>
            <th>Daerah Makanan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "includes/config.php";
        $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
        $sql = mysqli_query($conn, $query);
        $nomor = 1;

        while ($data = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= htmlspecialchars($data["nama_makanan"]) ?></td>
                <td><?= htmlspecialchars($data["daerah_makanan"]) ?></td>
                <td>
                    <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>">Edit</a> |
                    <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" 
                       onclick="return confirm('Yakin ingin menghapus data ini?');">
                       Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Menampilkan Total Data -->
<p>Total: <?= mysqli_num_rows($sql) ?></p>