<?php
declare (strict_types=1);

namespace app\admin\controller;

use app\BaseController;

class Index extends BaseController
{
	public function index ()
	{
		return '您好！这是一个[admin]示例应用';
	}
}
