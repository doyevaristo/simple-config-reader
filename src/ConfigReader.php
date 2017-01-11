<?php 
namespace Doyevaristo;

class ConfigReader{

    public function __construct(){

        //smple edit file

    }
    
    /**
     * Load Configuraton File
     *
     * @param string config file path
     * @return array
     */
    public static function load($configPathfile){

        if(!file_exists($configPathfile)){
            return [];
        }

        $key = str_replace("config-","",basename($configPathfile,'.php'));
        $configData[$key] = include $configPathfile;

        return $configData;
    }
}