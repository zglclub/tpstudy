<?php

namespace app\admin\controller;

use app\common\BaseController;
use think\Request;
use app\common\model\AdminManager;
use think\facade\View;

use app\common\model\AdminMrlink;
class Manager extends BaseController
{

    public function list()
    {
        $datauser = AdminManager::select();
//        $datauser = $datauser->admin_role();
//halt($datauser);
        View::assign('user',$datauser);
        return view();
    }
    public function cate()
    {
        return view();
    }
    public function rule()
    {
        return view();
    }

    public function edit()
    {
        return view();
    }
    public function add()
    {
        return view();
    }
}
