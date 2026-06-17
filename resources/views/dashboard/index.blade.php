@extends('layouts.app')

@section('title', 'Dashboard Adidas Store')

@section('content')
<div class="max-w-4xl mx-auto px-10 py-10 bg-white min-h-screen">

    {{-- HEADER & LOGO UTAMA (Logo Dikecilkan & Simpel) --}}
    <div class="flex flex-col items-center justify-center text-center border-b border-gray-100 pb-6 mb-10">
        <img src="{{ asset('storage/products/logo2.jpeg') }}" 
             alt="Adidas Logo" 
             class="h-10 w-auto object-contain mb-3">
        <h1 class="text-xl font-black tracking-widest text-gray-900 uppercase">
            Adidas History & Showcase
        </h1>
        <p class="text-[10px] text-gray-400 uppercase tracking-widest mt-1">
            Herzogenaurach, Germany • Est. 1949
        </p>
    </div>

    {{-- SECTION: SEJARAH SINGKAT ADIDAS --}}
    <div class="bg-zinc-50 rounded-2xl p-6 border border-gray-100">
        <div class="max-w-3xl">
            <span class="text-[10px] font-black tracking-widest text-zinc-400 uppercase">The Legacy</span>
            <h2 class="text-xl font-black text-gray-900 uppercase tracking-tight mt-1 mb-4">
                Sejarah Singkat Adidas
            </h2>
            
            <p class="text-gray-700 text-xs leading-relaxed mb-5">
                Adidas didirikan oleh <strong class="text-black font-semibold">Adolf "Adi" Dassler</strong> di Herzogenaurach, Jerman pada tahun 1949. Berawal dari perusahaan keluarga yang berseteru, Adi berpisah dengan kakaknya (Rudolf Dassler, yang mendirikan Puma) dan menciptakan merek ikonik ini dari gabungan nama depannya, <span class="italic">"Adi"</span> dan <span class="italic">"Dassler"</span>.
            </p>

            {{-- Garis Waktu / Timeline Sejarah --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4 border-t border-gray-200/60">
                <div>
                    <span class="text-sm font-black text-black block">1920-an</span>
                    <p class="text-[11px] text-gray-500 leading-relaxed mt-0.5">
                        Adi memproduksi sepatu di ruang cuci ibunya sebelum kakaknya bergabung membentuk Dassler Brothers.
                    </p>
                </div>
                <div>
                    <span class="text-sm font-black text-black block">1949</span>
                    <p class="text-[11px] text-gray-500 leading-relaxed mt-0.5">
                        Pasca perang, kedua bersaudara berselisih. Adi resmi mendaftarkan merek Adidas pada 18 Agustus.
                    </p>
                </div>
                <div>
                    <span class="text-sm font-black text-black block">1954 / 1972</span>
                    <p class="text-[11px] text-gray-500 leading-relaxed mt-0.5">
                        Sepatu pul inovatif membawa Jerman juara Piala Dunia '54, disusul kelahiran logo Trefoil pada 1972.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection