<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 28.05.15
 * Time: 21:05
 */

namespace App\Http\Controllers;



use App\Settings;
use Bootstrapper\Form;
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
        $avlLangs = ['en', 'pl', 'es'];

        $settings = Settings::find(1);

        $settings->languages = unserialize($settings->languages);


        return view('admin/settings', ['settings'=>$settings, 'avlLangs'=>$avlLangs]);
    }

    public function postSettings()
    {

        $settings = Settings::find(1);

        $settings->blogsName = Request::input('blogsName');
        $settings->languages = serialize(Request::input('languages'));

        $settings->save();

        return Redirect::back();

    }


} 