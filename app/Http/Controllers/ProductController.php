<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Tampilkan semua produk.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('produk.index', compact('products'));
    }

    /**
     * Form tambah produk.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Simpan produk baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'size'  => 'required|string|max:50',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload image jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'  => $request->name,
            'price' => $request->price,
            'size'  => $request->size,
            'stock' => $request->stock,
            'image' => $imagePath,
        ]);

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Form edit produk.
     */
    public function edit(Product $produk)
{
    return view('produk.edit', [
        'product' => $produk
    ]);
}

public function update(Request $request, Product $produk)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'price' => 'required|numeric',
        'size'  => 'required|string|max:50',
        'stock' => 'required|integer',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = $produk->image;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    $produk->update([
        'name'  => $request->name,
        'price' => $request->price,
        'size'  => $request->size,
        'stock' => $request->stock,
        'image' => $imagePath,
    ]);

    return redirect()->route('produk.index')
                     ->with('success', 'Produk berhasil diperbarui.');
}

public function destroy(Product $produk)
{
    $produk->delete();

    return redirect()->route('produk.index')
                     ->with('success', 'Produk berhasil dihapus.');
}
}