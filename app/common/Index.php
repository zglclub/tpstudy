<?php
namespace app\common;

use think\facade\Env;

class Index extends BaseController
{
    public function index()
    {
        halt(Env::get());
        return ;
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
