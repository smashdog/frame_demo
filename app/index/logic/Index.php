<?php

namespace app\index\logic;

class index
{
    public function index($params = [])
    {
        $db = (new \smdb\Db())->conn;
        print_r($db->select('id', 'username')->from('user'));
    }

    public function swoole($params = [])
    {
        $db = (new \smdb\Db())->conn;
        $r = $db->select('id', 'username')->from('user');

        return p($r);
    }
}
