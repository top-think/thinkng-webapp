<?php
namespace App\Home\Controller;

use Think\Controller\Controller;

class Pages extends Controller
{
    function hello()
    {
        echo 'hello world';
    }

    //空方法测试/Home/Pages/xx
    public function _empty($name)
    {
        //把所有城市的操作解析到city方法
        return $this->showCity($name);
    }

    //注意 showCity方法 本身是 protected 方法
    protected function showCity($name)
    {
        //和$name这个城市相关的处理
        return '当前城市' . $name;
    }
}