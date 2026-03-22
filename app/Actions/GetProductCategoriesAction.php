<?php

namespace App\Actions;

use App\Services\ProductApiService;
use Exception;
use Illuminate\Support\Facades\Cache;
use Laramate\Support\Tasks\Action;

class GetProductCategoriesAction extends Action
{
    /**
     * @throws Exception
     */
    public function handle(): array
    {
        if (Cache::has('product_categories')) {
            return Cache::get('product_categories');
        }

        $productCategoryResponse = new ProductApiService()->getCategories();

        if ($productCategoryResponse->successful()) {
            $categories = $productCategoryResponse->json();
            Cache::put('product_categories', $categories, 60);

            return $categories;
        }

        throw new Exception('Unable to query product categories');
    }
}
