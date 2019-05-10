<?php

namespace app\index\controller;

class Swoole
{
    public function swoole($params = [])
    {
        $db = (new \smdb\Db())->conn;
        $r = $db->select('id', 'username')->from('user');

        return p($r);
    }
}
