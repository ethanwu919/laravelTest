<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item as Item;
use Illuminate\Support\Facades\Redis as Redis;
class ItemController extends Controller
{
    //
    private $model;
    public function __construct()
    {
        $this->model = new Item();
    }
    public function showItem($id)
    {
        $redis = Redis::connection('default');
        $cacheUsers = $redis->get('userList');
        if( $cacheUsers ){
            $users = $cacheUsers;

            }else{
            $users = $this->model->fetchAll();
            $redis->set('userList', $users);
            }
        echo json_encode($users);
    }

}
