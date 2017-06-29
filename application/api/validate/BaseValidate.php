<?php

namespace app\api\validate;

use think\Validate;
use think\Exception;
use think\Request;

class BaseValidate extends Validate
{
  public function goCheck()
  {
    // 获取HTTP所有参数并校验
    $request = Request::instance();
    $params  = $request->param();

    if( !$this->check($params) ) {
      $error = $this->error;
      throw new Exception($error);
    } else {
      return true;
    }
  }
}