<?php

namespace app\api\model;

use think\Model;
use think\Exception;

class Banner extends Model
{
    public static function getBannerById($id)
    {
        // TODO: try中根据BannerId获取数据
        try {
            1/0;
        } catch( \Exception $ex ) {
            // TODO: 记录异常日志,抛出异常到控制器层
            throw $ex;
        }
    }
}
