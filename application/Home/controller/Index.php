<?php
namespace app\Home\controller;

use \think\Request;

class Index
{
    public function index()
    {   
        // 后端测试请求  post()  get()
        $request = request()->post();
        if($request){
            re_arr(1,'yes',$request);
        }else{
            echo '000';
        }
    }

}
