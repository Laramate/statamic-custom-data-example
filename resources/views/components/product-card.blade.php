<div class="bg-gray-900 rounded-2xl shadow-md shadow-black/30 overflow-hidden hover:shadow-xl hover:shadow-black/40 transition-shadow duration-300 border border-gray-800">
    <div class="aspect-square overflow-hidden">
        <img
            src="{{ $product['images'][0] ?? $product['category']['image'] ?? '' }}"
            alt="{{ $product['title'] }}"
            class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
        >
    </div>
    <div class="p-4">
        <p class="text-xs font-semibold uppercase tracking-wide text-indigo-400 mb-1">
            {{ $product['category']['name'] ?? '' }}
        </p>
        <h3 class="text-md font-semibold text-gray-100 leading-tight mb-2">
            {{ $product['title'] }}
        </h3>
        <p class="text-sm text-gray-400 line-clamp-2 mb-3">
            {{ $product['description'] }}
        </p>
        <div class="flex items-center justify-between">
            <span class="text-xl font-extrabold text-gray-100">${{ number_format($product['price'], 2) }}</span>
        </div>
    </div>
</div>
