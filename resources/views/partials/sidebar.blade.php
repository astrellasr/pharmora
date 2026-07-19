<aside class="w-64 shrink-0 border-r border-slate-200 bg-white">

    <div class="flex h-full flex-col">

        {{-- Logo --}}
        <div class="px-6 py-8">
            <h1 class="text-2xl font-bold text-emerald-600">
                Pharmora
            </h1>
        </div>

        {{-- Main Navigation --}}
        <nav class="flex-1 px-4">
            <ul class="space-y-2">

                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Products
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Categories
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Suppliers
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Inventory
                    </a>
                </li>

            </ul>
        </nav>

        {{-- Footer Navigation --}}
        <div class="border-t border-slate-200 p-4">

            <ul class="space-y-2">

                <li>
                    <a href="#"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Profile
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center rounded-xl px-4 py-3 text-sm font-medium">
                        Settings
                    </a>
                </li>

            </ul>

        </div>

    </div>

</aside>