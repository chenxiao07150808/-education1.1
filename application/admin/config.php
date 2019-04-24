<?php
use \think\Request;

$basename = Request::instance()->root();

if (pathinfo($basename, PATHINFO_EXTENSION) == 'php') {

    $basename = dirname($basename);

}

//配置文件中改成这样

return [
 'view_replace_str' => [

        '__ROOT__'   => $basename,

        '__DATA__'   => $basename . '/data',

        '__PUBLIC__' => $basename . '/public',

        '__UPLOAD__'=> $basename . '/data/upload',

        '__AJS__' => $basename.'/static/admin/js',

        '__ACSS__' => $basename.'/static/admin/css',

        '__AIMG__' => $basename.'/static/admin/images',

         '__ALIB__' => $basename.'/static/admin/lib',

        '__ASTATIC__' => $basename.'/static/admin/static',

         "__URLS__"=> $basename."/admin"

    ],
    'email' =>'chenxiao@qq.com',
];