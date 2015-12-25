<?php
/**
 * @author dingjiacai <dingjc89@126.com>
 * [2015-12-23]
 * 任务控制器
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class TaskController extends Controller
{
    /**
     * undocumented function
     *
     * @return view
     * @author dingjiacai
     **/
    public function index()
    {
        $collection = Collection::make([1,2,3]);//Eloquent 对象集合总是以这种方式返回
        // $collection = collect([1,2,3])
        var_dump($collection);exit;
    	/**
    	 * 判断视图是否存在
    	 * @return boolen 存在: true 不存在: false
    	 */
    	if (view()->exists('task.index')) {
    		return view('task.index')->with('data',array(1,2))
                                     ->with('date',date('Y/m/d H/i/s',time()));	// array()
    	}
    	return view('errors.503');
    }

    /**
     * undocumented function
     *
     * @return view
     * @author dingjiacai
     **/
    public function show($id)
    {
    	return view('welcome')->with('id',$id);
    }
}
