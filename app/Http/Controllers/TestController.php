<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 24.05.15
 * Time: 21:24
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Route;

class TestController extends Controller{


    public function __construct()
    {
        //$this->middleware('test');
    }

    public function testing()
    {

        return view('test', ['text'=>'testing']);
    }

} 