<?php
/**
 * @author dingjiacai <dingjc89@126.com>
 * [2015-12-23]
 * 视图组件
 */
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class ProfileComposer
{
	public function compose(View $view)
	{
		$view->with('author','kevin');
	}
}
