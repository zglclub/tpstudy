<?php

namespace app\common\model;

use think\Model;

/**
 * @mixin think\Model
 */
class Admin extends Model
{
    //表名
    protected $table = 'hsk_admin';
    //主键
    protected $pk = 'id';
    //自动开启时间戳
    protected $autoWriteTimestamp = true;

}
