<?php
/**
 * Created by PhpStorm.
 * User: hainuo
 * Date: 16-4-15
 * Time: 下午2:16
 */

namespace App\Home\Controller;

class Error
{
    public function index()
    {
        //根据当前模块名来判断要执行那个城市的操作
        $cityName = CONTROLLER_NAME;
        return $this->name($cityName);
    }

    //注意 city方法 本身是 protected 方法
    protected function name($name)
    {
        //和$name这个城市相关的处理
        return '当前控制器名称' . $name;
    }

    //空方法测试/Home/xxx/xx
    public function _empty($name)
    {
        //把所有城市的操作解析到city方法
        return $this->methodname($name);
    }

    //注意 showCity方法 本身是 protected 方法
    protected function methodname($name)
    {
        //和$name这个城市相关的处理
        return '当前方法名称' . $name;
    }
}