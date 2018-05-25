<?php

namespace TrTool\ParseUrlRest\Src\Classes;

/**
 * Class ParserConfig Get a configuration from the name Call (PUT, GET...)
 * You need to specify in a new class which implements this class to generate a info name
 * @package TrTool\ParseUrlRest
 */
class ParserConfig {

    /**
     * @param string $name Name Call (Post,put...)
     * @return array info of the name call ( Regex, ...)
     */
    static function get($name) {
        $functionInfo = 'name' . ucfirst($name) . 'Info';
        return self::$functionInfo();
    }


    /*****************  SAMPLE ********************/


}
