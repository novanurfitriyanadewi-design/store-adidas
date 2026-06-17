<aside class="w-64 min-h-screen bg-white text-zinc-900 border-r border-gray-200 shadow-sm flex flex-col justify-between">

    <div>
        {{-- Logo Adidas & Brand Header --}}
        <div class="p-6 border-b border-gray-100 text-center flex flex-col items-center">
            <div class="w-20 h-20 mb-3 flex items-center justify-center bg-transparent overflow-hidden">
                <img src="{{ asset('storage/products/logo2.jpeg') }}" 
                     alt="Adidas Logo" 
                     class="w-full h-full object-contain tracking-tight">
            </div>
            <h1 class="text-md font-black tracking-widest text-zinc-900 uppercase">
                Adidas Store Jombang
            </h1>
            <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">
                Admin Panel
            </p>
        </div>

        {{-- Menu Navigasi --}}
        <nav class="p-4">
            <ul class="space-y-3">

                {{-- Menu: Dashboard --}}
                <li>
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group
                       {{ request()->routeIs('dashboard') ? 'bg-black text-white font-bold' : 'text-zinc-600 hover:bg-gray-100 hover:text-zinc-900' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path>
                        </svg>
                        <span class="ml-3 text-sm tracking-wide uppercase font-semibold">Dashboard</span>
                    </a>
                </li>

                {{-- Menu: Produk Adidas --}}
                <li>
                    <a href="{{ route('produk.index') }}"
                       class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group
                       {{ request()->routeIs('produk.*') ? 'bg-black text-white font-bold' : 'text-zinc-600 hover:bg-gray-100 hover:text-zinc-900' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        <span class="ml-3 text-sm tracking-wide uppercase font-semibold">Produk Adidas</span>
                    </a>
                </li>

                {{-- Menu: Profil --}}
                <li>
                    <a href="{{ route('profile.edit') }}"
                       class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group
                       {{ request()->routeIs('profile.*') ? 'bg-black text-white font-bold' : 'text-zinc-600 hover:bg-gray-100 hover:text-zinc-900' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="ml-3 text-sm tracking-wide uppercase font-semibold">Profil</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    {{-- Tombol Logout --}}
    <div class="p-4 border-t border-gray-100">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="flex items-center w-full px-4 py-3 rounded-xl text-red-600 hover:bg-red-50 transition-all duration-200 font-semibold text-sm uppercase tracking-wide">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                <span class="ml-3">Logout</span>
            </button>
        </form>
    </div>

</aside>