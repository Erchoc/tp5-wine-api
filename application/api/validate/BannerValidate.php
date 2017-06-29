<?php

namespace app\api\validate;

use think\Validate;

class BannerValidate extends Validate
{
  protected $rule = [
    'name'        => 'require',
    'descripion'  => 'require',
  ];

}
