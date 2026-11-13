<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Produk</h1>
            <h1>CANDRA ANGGRIANA - 231091750143 </h1>
            <!-- Tombol Trigger Modal -->
            <button onclick="toggle_modal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-2xl">
                + Tambah Item
            </button>
        </div>

        <!-- Tabel Produk -->
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="border p-2">Nama Barang</th>
                    <th class="border p-2">Harga</th>
                    <th class="border p-2">Stok</th>
                    <th class="border p-2">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                <tr>
                    <td class="border p-2">{{ $p->nama_barang }}</td>
                    <td class="border p-2">Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td class="border p-2">{{ $p->stok }}</td>
                    <td class="border p-2">{{ $p->deskripsi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Item -->
    <div id="modal_tambah_item" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
        <div class="bg-white p-6 rounded shadow-lg w-96">
            <h2 class="text-lg font-bold mb-4">Tambah Item Baru</h2>
            
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                
                <label class="text-sm">Nama Barang</label>
                <input type="text" name="nama_barang" class="w-full border p-2 mb-3 rounded" required>

                <label class="text-sm">Harga</label>
                <input type="number" name="harga" class="w-full border p-2 mb-3 rounded" required>

                <label class="text-sm">Stok</label>
                <input type="number" name="stok" class="w-full border p-2 mb-3 rounded" required>

                <label class="text-sm">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border p-2 mb-3 rounded" required></textarea>

                <div class="flex justify-end gap-2 mt-2">
                    <button type="button" onclick="toggle_modal()" class="text-gray-500 px-4 py-2">
                        Batal
                    </button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-2xl">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Toggle Modal -->
    <script>
        function toggle_modal() {
            const modal = document.getElementById('modal_tambah_item');
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }
    </script>

</body>
</html>