<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 28.05.15
 * Time: 21:05
 */

namespace App\Http\Controllers;



use App\Settings;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('not.admin');

    }

    public function getIndex()
    {

        return view('admin/index');
    }

    public function getSettings()
    {

        return view('admin/settings', ['settings'=>Settings::find(1)]);
    }

    public function postSettings()
    {

        $settings = Settings::find(1);

        $settings->blogsName = Request::input('blogsName');

        $settings->save();

        return Redirect::back();

    }


} 