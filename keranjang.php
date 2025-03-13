<?php
include 'class/db.php';
include 'class/OrderItems.php';

// Buat instance dari class OrderItems
$orderItems = new OrderItems();

// Ambil semua item di keranjang
$order_items = $orderItems->tampil_order_items(); // Tanpa parameter
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Isi Keranjang</h1>
        <a href="index.php" class="btn btn-primary">Kembali ke Menu</a>
        <a href="order.php" class="btn btn-primary">Lihat Order</a>

        <table id="menuTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Menu Item</th>
                    <th>Quantity</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_items as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['order_id']) ?></td>
                        <td><?= htmlspecialchars($item['menu_item_id']) ?></td>
                        <td><?= htmlspecialchars($item['quantity']) ?></td>
                        <td>
                        <form action="controllerOrder.php" method="POST" style="display:inline;">
                        <a class="btn btn-success" href="order.php" name="Checkout">Checkout</a>    
                        <a href="controllerOrderItems.php?action=hapus&id=<?= $item['menu_item_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                        </form>
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