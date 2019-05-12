<?php

namespace app\common\model;

use think\Model\Pivot;

/**
 * @mixin think\Model
 */
class AdminMrlink extends Pivot
{
    //表名
//    protected $table = 'hsk_admin_mrlink';
    //自动开启时间戳
    protected $autoWriteTimestamp = true;

}
