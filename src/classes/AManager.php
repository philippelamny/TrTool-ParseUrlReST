<?php

namespace TrTool\ParseUrlRest\Src\Classes;

/**
 * Class AManager
 * @package TrTool\ParseUrlRest\Src\Classes
 */
abstract class AManager implements IManager {
    protected $_specificObject;
    protected $_options;

    /**
     * AManager constructor.
     * @param null $specificObject
     * @param array|null $options
     */
    public function __construct($specificObject = null, Array $options = null) {

        $this->_specificObject = $specificObject;
        $this->_options = $options;
    }
}