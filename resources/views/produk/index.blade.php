@extends('layouts.app')

@section('title', 'Daftar Produk Adidas')

@section('content')
<div class="px-6 py-6"> <!-- gunakan px-6 agar ada padding, tanpa container mx-auto -->

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Produk Sepatu Adidas</h1>
        <a href="{{ route('produk.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Produk
        </a>
    </div>

    <!-- EMPTY DATA -->
    @if($products->isEmpty())
        <div class="text-center text-gray-500">
            Belum ada data produk.
        </div>
    @else

    <!-- TABLE FULL WIDTH -->
    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Gambar</th>
                    <th class="px-4 py-2">Nama Produk</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Ukuran</th>
                    <th class="px-4 py-2">Stok</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr class="border-t hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $product->id }}</td>
                    <td class="px-4 py-2 text-center">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 alt="{{ $product->name }}"
                                 class="w-16 h-16 object-cover mx-auto rounded">
                        @else
                            <span class="text-gray-400 text-sm">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $product->name }}</td>
                    <td class="px-4 py-2 text-red-600 font-semibold">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </td>
                    <td class="px-4 py-2">{{ $product->size }}</td>
                    <td class="px-4 py-2">{{ $product->stock }}</td>
                    <td class="px-4 py-2 text-center space-x-2">
                        <a href="{{ route('produk.edit', $product->id) }}"
                           class="inline-block bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">
                            Edit
                        </a>
                        <form action="{{ route('produk.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus produk ini?')"
                                    class="inline-block bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                        Belum ada data produk.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @endif

</div>
@endsection
