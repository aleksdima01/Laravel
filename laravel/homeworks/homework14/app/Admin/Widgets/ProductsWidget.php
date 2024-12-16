<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-cup',
            'title' => 'Счетчик продуктов',
            'text' => "Кол-во продуктов: {$count}",
            'button' => [
                'text' => 'Продукты',
                'link' => '/admin/products',
            ],
            'image' => 'products.jpg',
        ]));
    }
    public function shouldBeDisplayed()
    {
        return true;
    }
}
