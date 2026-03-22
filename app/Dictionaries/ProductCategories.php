<?php

namespace App\Dictionaries;

use App\Actions\GetProductCategoriesAction;
use Statamic\Dictionaries\BasicDictionary;

class ProductCategories extends BasicDictionary
{
    protected string $valueKey = 'slug';
    protected string $labelKey = 'name';

    protected function getItems(): array
    {
        return new GetProductCategoriesAction()->handle();
    }
}
