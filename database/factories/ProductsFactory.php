<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * @return array
     */
    public function definition()
    {
        return [
            'info_products' => [
                'name' => 'Product name',
                'count' => 10,
                'description' => 'This is product)',
                'price' => 100,
            ]
        ];
    }
}
