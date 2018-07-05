<?php

namespace TrTool\ParseUrlRest\Src\classesManagerTest;

use TrTool\ParseUrlRest\Src\Classes\ParserConfig;

/**
 * Class TestParserConfig
 * @package TrTool\ParseUrlRest\Src\classesManagerTest
 */
final class TestParserConfig extends ParserConfig {

    /**
     * 'GET'
     * @return array
     */
    protected static function nameGetInfo() {
        return (object) array(
            'sample' => '',
            'regex' => '',
            'code' => array(
                'success' => '200'
            ),
        );
    }

    /**
     * 'POST'
     * @return array
     */
    protected static function namePostInfo() {
        return (object) array(
            'sample' => '',
            'regex' => '',
            'className' => 'PostAction',
            'code' => array(
                'success' => '201'
            ),
        );
    }

    /**
     * 'PUT' /full update or create
     * @return array
     */
    protected static function namePutInfo() {
        return (object) array(
            'sample' => '',
            'regex' => '',
            'code' => array(
                'success' => array('update' => '200', 'create' => '201'),
            ),
        );
    }

    /**
     * 'UPDATE' / parcial
     * @return array
     */
    protected static function nameUpdateInfo() {
        return (object) array(
            'sample' => '',
            'regex' => '',
            'code' => array(
                'success' => '200'
            ),
        );
    }

    /**
     * 'DELETE'
     * @return array
     */
    protected static function nameDeleteInfo() {
        return (object) array(
            'sample' => '',
            'regex' => '',
            'code' => array(
                'success' => '200'
            ),
        );
    }
}