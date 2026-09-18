@php
    $enlaces = [
      
        ['ruta' => 'usuarios.index', 'label' => 'Usuarios'],
        ['ruta' => 'productos.index', 'label' => 'Productos'],
        ['ruta' => 'clientes.index', 'label' => 'Clientes'],
    ];
@endphp

<nav class="bg-blue-400 border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

           <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                     <img src="{{ asset('images/logo.png') }}" alt="VentasFix" class="h-9 w-auto">
                </a>

                <div class="hidden sm:flex gap-1"> 
                    @foreach ($enlaces as $enlace)
                        <a
                            href="{{ route($enlace['ruta']) }}"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-150
                                {{ request()->routeIs(explode('.', $enlace['ruta'])[0] . '*')
                                    ? 'bg-indigo-50 text-indigo-700'
                                    : 'text-black-600 hover:bg-orange-600 hover:text-black' }}"
                        >
                            {{ $enlace['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center gap-4">
                @auth
                    <span class="text-sm text-black-500 hidden sm:inline">
                        {{ auth()->user()->nombre }} {{ auth()->user()->apellido }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-atoms.button type="submit" variant="danger">
                            Cerrar sesión
                        </x-atoms.button>
                    </form>
                @endauth
            </div>

        </div>
    </div>
</nav>
