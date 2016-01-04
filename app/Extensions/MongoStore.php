<?php
namespace App\Extensions;

use  \Illuminate\Contracts\Cache\Store as Store;
class MongoStore implements Store
{
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function get($key)
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function put($key,$value,$minutes)
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function increment($key, $value = 1)
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function decrement($key, $value = 1)
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function forever($key, $value)
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function forget($key)
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function flush()
	{
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function getPrefix()
	{
	}
} 
