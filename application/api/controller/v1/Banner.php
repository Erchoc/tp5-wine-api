<?php

namespace app\api\controller\v1;

use think\Controller;
use think\Request;
use think\Exception;
use app\api\validate\BannerValidate;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;

class Banner extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {
        return 'ooo';
        (new IDMustBePostiveInt())->gocheck();
        try {
            $banner = BannerModel::getBannerById($id);
        } catch( \Exception $ex ) {
            // TODO: 这里再抛出异常的话到ThinkPHP5的全局异常类中处理
            $err = [
                'error_code' => '10001',
                'msg'        => $ex->getMessage()
            ];
            return json($err,400); 
        }
        return $banner;
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
