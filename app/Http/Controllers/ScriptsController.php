<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 08.06.15
 * Time: 21:57
 */

namespace App\Http\Controllers;


use App\Lib\Generators\Language;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\File;
use Stichoza\GoogleTranslate\TranslateClient;

class ScriptsController extends Controller {

    public function translate($lang)
    {
       // return 'success';

        $languageGenerator = new Language($lang);
        $languageGenerator->generate();

        return 'success';


    }



} 