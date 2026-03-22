<section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-950 rounded-2xl">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($products as $product)
            <x-product-card :product="$product"></x-product-card>
        @endforeach
    </div>
</section>
