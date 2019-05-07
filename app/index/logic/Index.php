<?php

namespace app\index\logic;

class index
{
    public function index($params = [])
    {
        echo 'hello world '.$params['name'];
    }
}
