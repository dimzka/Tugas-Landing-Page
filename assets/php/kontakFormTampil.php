<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home - Brand</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css?h=91180125d193e45e653b99b7314045c4" />
    <link rel="stylesheet" href="../css/Raleway.css?h=f11e5762fc5623cb0c53b23af2a0ee48" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href=""><span>Sekolahku</span></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <p class="nav-link">Menu Beta</p>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontakFormTampil.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5 mt-5"></section>
    <!-- tampilkan tabel data kontak -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Data Kontak</h2>
                <div class="d-flex flex-row-reverse">
                    <div class="search-input-container">
                        <input type="text" class="mr-2" id="searchInput" placeholder="Pencarian pengguna"
                            oninput="filterTable()">
                        <a href="tambahData.php" class="btn btn-success m-1"><i class="fas fa-user-plus"></i>&nbsp;
                            Tambah Pengguna
                        </a>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th scope="col" style="text-align:center;width:18%;" data-orderable="false">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="usersTableBody">
                        <?php
                        include "connection.php";
                        $no = 1;
                        $data = mysqli_query($connection, "select * from tb_kontak ORDER BY id DESC");
                        while ($d = mysqli_fetch_array($data)) {
                            $id = $d['id'];
                            $nama = $d['nama'];
                            $email = $d['email'];
                            $keterangan = $d['keterangan'];
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $keterangan; ?></td>
                            <td>
                                <a href="ubahData.php?edit=<?php echo $id; ?>" class="btn btn-warning px-4">Ubah</a>
                                <a href="#" class="btn btn-danger" href="hapusData.php?edit=<?php echo $id; ?>">
                                    <i class="fas fa-trash"></i>
                                    &nbsp; Hapus
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="../js/bs-init.js?h=d0c6de1d0ecd5065d55e7b94664b5b10"></script>
<script src="../js/startup-modern.js?h=860a1ecddc64fd24c02f2fc109343dbd"></script>
<script>
function filterTable() {
    const searchText = document.getElementById("searchInput").value.toLowerCase();
    const rows = document.querySelectorAll("#usersTableBody tr");

    rows.forEach((row) => {
        const nameColumn = row.querySelector("td:nth-child(3)").textContent.toLowerCase();
        const idColumn = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
        const jabatanColumn = row.querySelector("td:nth-child(4)").textContent.toLowerCase();

        if (nameColumn.includes(searchText) || idColumn.includes(searchText) || jabatanColumn
            .includes(
                searchText)
        ) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}
</script>

</html>