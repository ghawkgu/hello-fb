<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class fbsdk {
    private $_sdk = null;
    public function __construct() {
        $facebook = new Facebook(array(
          'appId' => 'dummy',
          'secret' => 'dummy',
          'cookie' => false,
        ));
    }
    
    public function getSignedRequest() {
        return $this->_sdk->getSignedRequest();
    }
}