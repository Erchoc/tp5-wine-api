<?php

namespace app\api\validate;


class IDMustBePostiveInt extends BaseValidate
{
  protected $rule = [
    'id'  => 'require|isPositiveInteger'
  ];

  protected function isPositiveInteger($value,$rule='',$data='',$field='')
  {
    // 判断正整数: 数字-整数-大于零
    if(is_numeric($value) && is_int($value+0) && ($value+0) > 0) {
      return true;
    } else {
      return $field.'必须为正整数';
    }
    
  }
}
