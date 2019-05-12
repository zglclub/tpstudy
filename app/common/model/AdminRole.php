<?php

namespace app\common\model;

use think\Model;

/**
 * @mixin think\Model
 */
class AdminRole extends Model
{
    //角色表
    //表名
    protected $table = 'hsk_admin_role';
    //主键
    protected $pk = 'id';
    //自动开启时间戳
    protected $autoWriteTimestamp = true;

    public function admin_manager()
    {
        $this->belongsToMany('AdminManager');
    }
}
