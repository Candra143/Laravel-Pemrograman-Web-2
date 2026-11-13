<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label>Deskripsi:</label><br>
            <textarea name="description">{{ old('description') }}</textarea>
        </p>
        <p>
            <label>Harga:</label><br>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        </p>
        <button type="submit">Simpan</button>
        <a href="{{ route('products.index') }}">Batal</a>
    </form>
</body>
</html>