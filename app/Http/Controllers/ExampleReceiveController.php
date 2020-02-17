<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExampleRequest;

class ExampleReceiveController extends Controller{

    public function index(ExampleRequest $request){
        $input=$request->all();
        return $input;

    }

}


?>