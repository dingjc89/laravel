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

use Illuminate\Contracts\Auth\Authenticatable;
use Cache;
use Carbon\Carbon;
use Crypt;
use DB;
use Hash;

class TaskController extends Controller
{
    /**
     * undocumented function
     *
     * @return view
     * @author dingjiacai
     **/
    public function index(Authenticatable $user)
    {
        DB::transaction(function() {
            $userId = DB::table('users')->insert(array('name'=>'kevin','email'=>'kevin@126.com','password'=>Hash::make('kevin')));
            DB::table('tasks')->insert(array('user_id'=>$userId, 'name'=>'创建用户'));

        });
        echo "add success";exit;
        // Cache::add('userid',1,1);
        // $expiresAt = Carbon::now()->addMinutes(10);
        // Cache::put('userid',2,$expiresAt);
        // Cache::put('bar','baz',$expiresAt);
        // Cache::store('redis')->put('bar', 'baz', 10);
        // Cache::add('userid',1,60);
     // Cache::forget('userid');
        $collection = Collection::make([1,2,3]);//Eloquent 对象集合总是以这种方式返回
        $collection = collect([1,2,3]);
        // $multiplied = $collection->transform(function ($item, $key) {
        //     return $item * 2;
        // });
        // $merged = $collection->merge([1,2]);
        // $reduce = $collection->reduce(function ($value, $item) {
        //     return $value + $item;
        // });
        // $reject = $collection->reject(function ($item) {
        //     return $item >1;
        // });
        $search = $collection->search(1,true);
        // var_dump($search);
        $password = Crypt::encrypt('admin');
        // var_dump($password);
        $password = Crypt::decrypt($password);
        // var_dump($password);exit;
        var_dump(trans('auth.failed'));exit;
        // var_dump($user);exit;
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
        $sum = $this->add();
        print($sum);exit;
    	return view('welcome')->with('id',$id);
    }

    /**
     * undocumented function
     *
     * @return intger
     * @author 
     **/
    public function add()
    {
        return 1 + 1;
    }
}
