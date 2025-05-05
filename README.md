# SportMart - Toko Peralatan Olahraga

Aplikasi berbasis web untuk mengelola toko peralatan olahraga. Dibangun sebagai bagian dari tugas Framework Web Based 2025.


- **Nama: Aco Muh Arrafi Ahmad  
- **NIM: D0223048
- **Makul: Framework Web Based  
- **Tahun: 2025

---

## 🔐 Role dan Fitur

### Admin
- Mengelola pengguna (tambah/edit/hapus)
- Mengelola kategori dan produk
- Melihat semua transaksi dan laporan keuangan
- Mengelola transaksi secara penuh

### Manager
- Mengelola produk (tambah/edit/hapus)
- Melihat transaksi produk yang dikelola
- Melihat laporan penjualan
- Mengelola stok produk

### Customer
- Melihat produk dan kategori
- Membeli produk
- Melihat riwayat transaksi
- Mengelola profil pengguna
- Memberikan ulasan produk

---

## 🗃️ Struktur Database

### 1. Tabel `users`
| Field        | Tipe Data  | Keterangan                          |
|--------------|------------|--------------------------------------|
| id           | bigint     | Primary key                         |
| name         | string     | Nama pengguna                       |
| email        | string     | Unik, email pengguna                |
| password     | string     | Password terenkripsi                |
| role         | string     | Role pengguna                       |
| created_at   | timestamp  | Timestamp pembuatan data            |
| updated_at   | timestamp  | Timestamp pembaruan data            |

### 2. Tabel `categories`
| Field        | Tipe Data  | Keterangan                          |
|--------------|------------|--------------------------------------|
| id           | bigint     | Primary key                         |
| name         | string     | Nama kategori                       |
| description  | text       | Deskripsi kategori (nullable)       |
| created_at   | timestamp  | Timestamp pembuatan kategori        |
| updated_at   | timestamp  | Timestamp pembaruan kategori        |

### 3. Tabel `products`
| Field          | Tipe Data      | Keterangan                             |
|----------------|----------------|-----------------------------------------|
| id             | bigint         | Primary key                            |
| name           | string         | Nama produk                            |
| category_id    | bigint         | Foreign key ke `categories(id)`        |
| price          | decimal(10,2)  | Harga produk                           |
| description    | text           | Deskripsi produk (nullable)            |
| stock_quantity | integer        | Jumlah stok                            |
| created_at     | timestamp      | Timestamp pembuatan                    |
| updated_at     | timestamp      | Timestamp pembaruan                    |

### 4. Tabel `transactions`
| Field        | Tipe Data              | Keterangan                              |
|--------------|------------------------|------------------------------------------|
| id           | bigint                 | Primary key                             |
| user_id      | bigint                 | Foreign key ke `users(id)`              |
| total_amount | decimal(10,2)          | Total transaksi                         |
| status       | enum                   | 'pending', 'completed', 'cancelled'     |
| created_at   | timestamp              | Timestamp pembuatan                     |
| updated_at   | timestamp              | Timestamp pembaruan                     |

### 5. Tabel `transaction_items`
| Field           | Tipe Data      | Keterangan                                 |
|------------------|----------------|---------------------------------------------|
| id               | bigint         | Primary key                                |
| transaction_id   | bigint         | Foreign key ke `transactions(id)`          |
| product_id       | bigint         | Foreign key ke `products(id)`              |
| quantity         | integer        | Jumlah produk                              |
| price            | decimal(10,2)  | Harga saat transaksi                       |
| created_at       | timestamp      | Timestamp pembuatan item transaksi         |
| updated_at       | timestamp      | Timestamp pembaruan item transaksi         |

---

## 🔗 Relasi Antar Tabel

| Relasi                              | Keterangan                                                                 |
|-------------------------------------|-----------------------------------------------------------------------------|
| `User` → `Transactions`            | Satu user bisa memiliki banyak transaksi                                  |
| `Category` → `Products`            | Satu kategori memiliki banyak produk                                       |
| `Transaction` → `TransactionItems` | Satu transaksi terdiri dari banyak item                                    |
| `Product` → `TransactionItems`     | Satu produk bisa ada di banyak transaksi item                              |

