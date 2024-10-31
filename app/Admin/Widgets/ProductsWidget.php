<?php
namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

/**
 * 
 */
class ProductsWidget  extends AbstractWidget
{
	protected $config = [];

	public function run()
	{
		$count = Product::count();

		return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-barbeque',
			'title' => 'Счетчик товаров',
			'text' => 'Кол-во товаров: ' . $count,
			'button' => [
				'text' => 'Перейти к списку',
				'link' => '',
			],
            'image' => '',
		]));
	}
	
	// function __construct(argument)
	// {
		
	// }

	public function shouldBeDisplayed()
	{
		return true;
	}
}
