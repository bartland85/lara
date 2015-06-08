<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 08.06.15
 * Time: 21:57
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Stichoza\GoogleTranslate\TranslateClient;

class ScriptsController extends Controller {

    public function translate($lang)
    {
        $langDir = base_path().'/resources/lang/'.$lang.'/';
        $defaultLangDir = base_path().'/resources/lang/en/';

        if(!File::exists($langDir))
            File::makeDirectory($langDir);

        Lang::setLocale('en');
        $defs = Lang::get('gen');


        foreach($defs as $key=>$def){
            $translation[$key] = TranslateClient::translate('en', $lang, $def);
        }
//dd(var_export($translation));
//        $test = '<?php return '.var_export($translation, true);
//
//        dd($test);

        File::put($langDir.'gen.php', '<?php return '.var_export($translation, true).';');

        dd('ok');

        //create directory
        //get definitions from default lang
        //get translations
        //create file
        //put translations into file
    }



} 