<?php
namespace app\index\controller;
use think\Controller;
class Index extends Base
{
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

    public function index()
    {   $this->assign('id',0);
        return view();
    }
}
