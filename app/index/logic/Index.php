<?php

namespace app\index\logic;

class index
{
    public function index($params = [])
    {
        $db = (new \smdb\Db())->conn;
        print_r($db->select('id', 'username')->from('user'));
    }
}
