<?php

namespace app\common\model;

use think\Model;

/**
 * @mixin think\Model
 */
class AdminManager extends Model
{

    //表名
    protected $table = 'hsk_admin_manager';
    //主键
    protected $pk = 'id';
    //自动开启时间戳
    protected $autoWriteTimestamp = true;

    //关联role
    public function admin_role()
    {
        return $this->belongsToMany('app\common\model\AdminRole','\\app\\common\\model\\AdminMrlink','manager_id','role_id');

    }


}
