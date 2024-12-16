<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Category::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-categories',
            'title' => 'Счетчик категорий',
            'text' => "Кол-во категорий: {$count}",
            'button' => [
                'text' => 'Категории',
                'link' => '/admin/categories',
            ],
            'image' => 'category.jpg',
        ]));
    }
    public function shouldBeDisplayed()
    {
        return true;
    }
}
