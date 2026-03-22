<?php

namespace App\View\Components;

use App\Actions\GetProductsAction;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductListing extends Component
{
    public array $products;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $category)
    {
        $this->products = new GetProductsAction($this->category)->handle();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-listing', [
            'products' => $this->products,
        ]);
    }
}
