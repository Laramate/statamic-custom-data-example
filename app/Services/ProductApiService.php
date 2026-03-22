<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class ProductApiService
{
    public function __construct(
        public string $baseUrl = 'https://api.escuelajs.co/api/v1/'
    )
    {
        // Get your API Credentials from config
    }

    /**
     * Create an HTTP client configured for your API.
     */
    public function http(): PendingRequest
    {
        return Http::baseUrl($this->baseUrl)
            ->acceptJson()
            ->asJson();
    }

    public function getProducts(?string $category = null): Response
    {
        return $this->http()->get("/products?categorySlug={$category}");
    }

    public function getCategories(): Response
    {
        return $this->http()->get('/categories');
    }
}
