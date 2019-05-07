<?php

namespace app\index\controller;

class Index
{
    public function index($params = [])
    {
        (new \app\index\logic\Index())->index($params);
    }
}
