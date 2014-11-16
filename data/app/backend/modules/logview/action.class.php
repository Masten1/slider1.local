<?php

class LogViewAction extends fvAction {
    
    function __construct () {
        parent::__construct(fvSite::$Layout);
    }
    
    function executeIndex() {
        if (fvRequest::getInstance()->isXmlHttpRequest())
            return self::$FV_AJAX_CALL;
        else return self::$FV_OK;
    }
}

?>
