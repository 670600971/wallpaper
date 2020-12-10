<?php

namespace app\index\controller;
use app\index\controller\IndexBase;
use app\BaseController;
use think\facade\Db;
use think\facade\View;

// use Elasticsearch\ClientBuilder;
class Index extends BaseController
{
    public function index(){
        return View::fetch();
    }
}