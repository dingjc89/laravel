<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class ProfileComposer
{
	public function compose(View $view)
	{
		$view->with('author','kevin');
	}
}