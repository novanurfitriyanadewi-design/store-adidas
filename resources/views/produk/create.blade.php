@extends('layouts.app')

@section('title', 'Tambah Produk Adidas')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Produk Sepatu Adidas</h1>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Nama --}}
        <div class="mb-4">
            <label class="block font-semibold">Nama Produk</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Harga --}}
        <div class="mb-4">
            <label class="block font-semibold">Harga</label>
            <input type="number" name="price" value="{{ old('price') }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Size --}}
        <div class="mb-4">
            <label class="block font-semibold">Size</label>
            <input type="text" name="size" value="{{ old('size') }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Stock --}}
        <div class="mb-4">
            <label class="block font-semibold">Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Gambar --}}
        <div class="mb-4">
            <label class="block font-semibold">Gambar</label>
            <input type="file" name="image"
                   class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan
        </button>

        <a href="{{ route('produk.index') }}" class="ml-2 text-gray-600">
            Batal
        </a>
    </form>
</div>
@endsection