
# Dokumentasi Aplikasi Order Food

Link Github = https://github.com/kendikadimas/Pemweb-2

Aplikasi ini adalah sistem pemesanan makanan sederhana yang memungkinkan pengguna untuk menambahkan menu ke keranjang, melihat keranjang, dan melakukan checkout. Aplikasi ini dibangun menggunakan PHP, Bootstrap, dan DataTables.

## Struktur File

### Class
1. **Menu**
   - `tambah_menu()`: Menambahkan menu ke dalam tabel `menu_items`.
   - `tampil_menu()`: Menampilkan menu di halaman `index.php`.

2. **OrderItems**
   - `tambah_order_items()`: Menambahkan menu ke keranjang dari halaman `index.php`.
   - `tampil_order_items()`: Menampilkan keranjang di halaman `keranjang.php`.

3. **Orders**
   - `tambah_orders()`: Melakukan checkout menu yang ada di keranjang.
   - `tampil_orders()`: Menampilkan orderan yang sudah dicheckout di halaman `order.php`.

### Controller
1. **ControllerMenu**
   - Menangani penambahan dan penghapusan menu yang ada di tabel `menu_items`.

2. **ControllerOrderItems**
   - Menangani penambahan dan penghapusan menu ke keranjang yang ada di tabel `order_items`.

3. **ControllerOrder**
   - Menangani penambahan dan penghapusan orderan yang ada di tabel `orders`.

### Halaman
1. **add_menu.php**
   - Menambahkan menu ke tabel `menu_items`.

2. **index.php**
   - Menampilkan menu dan menambahkan menu ke keranjang.

3. **keranjang.php**
   - Melihat menu yang sudah ditambahkan ke keranjang dan menambahkan orderan ke dalam tabel `orders`.

4. **order.php**
   - Melihat orderan yang sudah tercheckout dari keranjang.

## Cara Penggunaan

### Menambahkan Menu
1. Buka halaman `add_menu.php`.
2. Isi form dengan detail menu yang ingin ditambahkan.
3. Klik tombol "Tambah Menu".

### Menampilkan Menu
1. Buka halaman `index.php`.
2. Menu yang tersedia akan ditampilkan dalam tabel.
3. Untuk menambahkan menu ke keranjang, klik tombol "Masukan Keranjang".

### Melihat Keranjang
1. Buka halaman `keranjang.php`.
2. Menu yang sudah ditambahkan ke keranjang akan ditampilkan.
3. Untuk melakukan checkout, klik tombol "Checkout".

### Melihat Orderan
1. Buka halaman `order.php`.
2. Orderan yang sudah dicheckout akan ditampilkan.

## Struktur Database

### Tabel `menu_items`
- `id`: ID unik untuk setiap menu.
- `name`: Nama menu.
- `price`: Harga menu.
- `category`: Kategori menu.

### Tabel `order_items`
- `id`: ID unik untuk setiap item di keranjang.
- `order_id`: ID order yang terkait.
- `menu_item_id`: ID menu yang ditambahkan ke keranjang.
- `quantity`: Jumlah item yang dipesan.

### Tabel `orders`
- `id`: ID unik untuk setiap order.
- `user_id`: ID pengguna yang melakukan order.
- `order_date`: Tanggal dan waktu order.
- `status`: Status order (misalnya: Diproses, Selesai).
