<?php
namespace app\admin\controller;
use think\Controller;
class User extends Controller
{
    public function user_list()
    {
         return $this->fetch();
    }
  
}
