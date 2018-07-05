<?php

namespace TrTool\ParseUrlRest\Src\Classes;

/**
 * Class Builder allows to build the class manager in function of the parameters
 * @package TrTool\ParseUrlRest
 */
class Parser {

    /**
     * Allows to generate the class manager
     * @param String $nameCall (POST, GET...)
     * @param String $url URL TO Parse
     * @param $option Options of the form
     * @param $specificObject Specific object for costumized
     * @param $classParserConfigName class name of Parserconfig to use
     * @return AManager
     */
    static function getClassManager($nameCall, $url, $option, $specificObject, $classParserConfigName) : AManager {
        // get the information about the nameCall
        $infoName = $classParserConfigName::get($nameCall);

        // get the class Manager Name From the Regex & Url
        if ("" == $url && $infoName->className) { // If specified
            $className = $infoName->className;
        }
        else { // Manage by the regex
            $className = $infoName->regex;
        }

        // Return the manager class
        return new $className($specificObject, $option);
    }

}