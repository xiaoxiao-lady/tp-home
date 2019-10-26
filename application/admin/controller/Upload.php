<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/10/11
 * Time: 14:48
 */

namespace app\admin\controller;


class Upload extends  Base
{ public function _initialize()
{
    parent::_initialize(); // TODO: Change the autogenerated stub
}

    public  function index(){
      $file=request()->file('file');
      if($file){
          $info=$file->validate(['size'=>400*1920,'ext'=>'png,jpg,jpeg,gif,webp'])
          ->move(ROOT_PATH . 'public' . DS . 'uploads');
          if($info){
              $src=UPLOAD_PATH.$info->getSaveName();
              return json([
                 'code'=>0,
                 'msg'=>"上传成功",
                  "data"=>[
                      "src"=>$src,
                  ]
              ]);
//              echo $info->getExtension();
//              echo $info->getSaveName();
//              echo $info->getFilename();
          }else{
// 上传失败获取错误信息
              return json([
                  'code'=>1,
                  'msg'=>"上传失败",
                  "data"=>[
                      "src"=>$file->getError(),
                  ]

              ]);
          }
      }
  }
//  public  function moreindex(){
//      $files = request()->file('file');
//      dump($files);
////      foreach($files as $file){
////        $info=$file->validate(['size'=>200*1024,'ext'=>'png,jpg,jpeg,gif,webp'])
////            ->move(ROOT_PATH . 'public' . DS . 'uploads');
////          if($info){
////
//////              echo $info->getExtension();
//////              echo $info->getSaveName();
//////              echo $info->getFilename();
////          }else{
////// 上传失败获取错误信息
////
////          }
////      }
//  }
}