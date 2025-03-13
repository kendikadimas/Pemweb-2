<?php
include 'class/db.php';
require 'class/Menu.php';
$menu = new Menu();
$menu_items = $menu->tampil_menu();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Menu</h1>
        <a href="add_menu.php" class="btn btn-primary">TAMBAH MENU</a>
        <table id="menuTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu_items as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['id']) ?></td>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td>Rp <?= number_format($item['price'], 2) ?></td>
                        <td><?= htmlspecialchars($item['category']) ?></td>
                        <td>
                            <form action="controllerOrderItems.php" method="POST" style="display:inline;">
                                <input type="hidden" name="menu_item_id" value="<?= $item['id'] ?>">
                                <button type="submit" class="btn btn-warning btn-sm" name="tambahKeranjang">Masukan Keranjang</button>
                            </form>
                            <a href="controllerMenu.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')" name="deleteMenu">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#menuTable').DataTable({
                "paging": true, // Aktifkan pagination
                "searching": true, // Aktifkan pencarian
                "ordering": true, // Aktifkan pengurutan
                "info": true // Tampilkan informasi tabel
            });
        });
    </script>
</body>
</html>