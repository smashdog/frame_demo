<?php

namespace app\index\controller;

class Index
{
    public function index($params = [])
    {

        return (new \app\index\logic\Index())->index();
    }
}
