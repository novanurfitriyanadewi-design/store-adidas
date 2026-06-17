@extends('layouts.app')

@section('title', 'Edit Produk Adidas')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Produk Sepatu Adidas</h1>

    <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Nama Produk --}}
        <div class="mb-4">
            <label class="block font-semibold">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Harga --}}
        <div class="mb-4">
            <label class="block font-semibold">Harga</label>
            <input type="number" name="price" value="{{ $product->price }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Size --}}
        <div class="mb-4">
            <label class="block font-semibold">Size</label>
            <input type="text" name="size" value="{{ $product->size }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Stock --}}
        <div class="mb-4">
            <label class="block font-semibold">Stock</label>
            <input type="number" name="stock" value="{{ $product->stock }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>

        {{-- Image --}}
        <div class="mb-4">
            <label class="block font-semibold">Gambar (opsional)</label>
            <input type="file" name="image"
                   class="w-full border rounded px-3 py-2">

            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}"
                     class="w-32 mt-2">
            @endif
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Update
        </button>

        <a href="{{ route('produk.index') }}" class="ml-2 text-gray-600">Batal</a>
    </form>
</div>
@endsection