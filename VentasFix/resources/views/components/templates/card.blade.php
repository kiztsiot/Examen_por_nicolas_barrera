@props(['title' => null])

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @if ($title || isset($action))
        <div class="flex items-center justify-between mb-6">
            @if ($title)
                <h1 class="text-2xl font-semibold text-gray-900">{{ $title }}</h1>
            @endif

            @isset($action)
                {{ $action }}
            @endisset
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
        {{ $slot }}
    </div>
</div>
