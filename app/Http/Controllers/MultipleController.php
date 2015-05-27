<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 24.05.15
 * Time: 21:58
 */

namespace App\Http\Controllers;


class MultipleController extends Controller{

    public function getIndex()
    {
        echo 'This is index';
    }

    public function getFirstMethod()
    {
        echo 'This is first method';
    }

    public function getSecondMethod()
    {
        echo 'This is second method';
    }

    public function anyLogin()
    {
        echo 'This is any login';
    }

} 