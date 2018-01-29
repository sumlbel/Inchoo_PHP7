<?php

class Inchoo_PHP7_Helper_Data extends Mage_Core_Helper_Data
{
    /** @var string $_moduleName Compatibility for translations, and maybe other stuff which uses module names. */
    protected $_moduleName = 'Mage_Core';

    /**
     * Decodes the given $encodedValue string which is encoded in the JSON format
     *
     * Overridden to prevent exceptions in json_decode
     *
     * @param string $encodedValue
     * @param int $objectDecodeType
     * @return mixed
     * @throws Zend_Json_Exception
     */
    public function jsonDecode($encodedValue, $objectDecodeType = Zend_Json::TYPE_ARRAY) {
        if (is_bool($encodedValue) || !$encodedValue) {
            $encodedValue = var_export($encodedValue, true);
        }

        return Zend_Json::decode($encodedValue, $objectDecodeType);
    }
}
