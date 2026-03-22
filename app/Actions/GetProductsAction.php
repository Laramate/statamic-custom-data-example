<?php

namespace App\Actions;

use App\Services\ProductApiService;
use Laramate\Support\Tasks\Action;

class GetProductsAction extends Action
{
    public function __construct(public ?string $category = null) {}

    public function handle(): array
    {
        $productsResponse = new ProductApiService()->getProducts($this->category);

        return $productsResponse->json();
    }
}
