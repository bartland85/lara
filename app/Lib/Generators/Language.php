<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 18.06.15
 * Time: 20:53
 */

namespace App\Lib\Generators;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\File;
use Stichoza\GoogleTranslate\TranslateClient;

class Language {

    private $source;
    private $target;
    private $defs;
    private $langPath;

    const _BASE_LANG = 'en';



    function __construct($target)
    {
        $this->target = $target;
        $this->source = self::_BASE_LANG;
        $this->langPath = base_path().'/resources/lang/';
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    private function loadDefs()
    {
        Lang::setLocale(self::_BASE_LANG);
        $this->defs = Lang::get('gen');
        return $this;
    }

    private function translate()
    {
        foreach($this->defs as $key=>$def){

            try{
                $phrase = TranslateClient::translate($this->getSource(), $this->getTarget(), $def);
            }
            catch(Exception $e){
                return 'failed';
            }

            $this->trans[$key] = ucfirst($phrase);

        }
        return $this;
    }

    private function writeFile()
    {
        $path =  $this->langPath . $this->getTarget();
        if(!File::exists($path))
            File::makeDirectory($path,0775,true);


        File::put($path . '/gen.php', '<?php return '.var_export($this->trans, true).';');

        return $this;
    }


    public function generate()
    {
        $this->loadDefs()->translate()->writeFile();

    }

} 