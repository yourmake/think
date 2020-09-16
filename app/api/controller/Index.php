<?php
declare (strict_types=1);

namespace app\api\controller;

#use think\Request;

use think\facade\Request;

class Index
{
	/*protected $request;

	public function __construct (Request $request)
	{
		$this->request = $request;
	}*/

	public function index ()
	{
		//获取当前控制器
		echo Request::controller();
		echo "<br>";
		//如果需要返回小写可以使用
		echo Request::controller(true);
		echo "<br>";
		//如果要返回小写+下划线的方式，可以使用
		echo parse_name(Request::controller());

		echo "<br>";
		echo app('http')->getName();
		exit;
		$result = [
			'code' => 1,
			'message' => $this->request->get( [1, 'a'] )
		];

		return json( $result );
	}
}
