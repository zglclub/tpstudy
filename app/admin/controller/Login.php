<?php

namespace app\admin\controller;
use think\Request;
use app\common\BaseController;
use app\common\model\AdminManager;
use think\facade\Session;

class Login extends BaseController
{

    public function index(Request $request)
    {
        $data1 = AdminManager::find();
        //判断是否是Ajax提交
        if($request ->isPost()){
            //获取数据
            $data = $request->post();
            //数据验证

            //数据查询
            $username = $data['username'];
            $password = md5($data['password']);
            $res = AdminManager::where('username',$username)->where('password',$password)->find();
            if ($res != null)
            {
                Session::set('username',$username);
                return $this->success('','admin/index/index');
            }
        }
        return view();
    }


}
