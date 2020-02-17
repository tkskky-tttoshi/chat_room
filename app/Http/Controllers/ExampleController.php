<?php

//このファイルの場所
namespace App\Http\Controllers;

//使用するファイル
use App\Http\Controllers\Controller;
use App\Services\ExampleService;

//このファイルのクラス名と役割
class ExampleController extends Controller
{
    
    public function index(ExampleService $service) {  //ExampleServiceを$serviceに入れる
        $data['room_index'] = $service->getRoomIndex();   //ExampleServiceのgetRoomIndexを呼びだす

        //return $data['room_index'];                  //$data['room_index'] を応答として返す
        return view("example")->with($data);
    }   


}