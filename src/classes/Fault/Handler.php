<?php

namespace Greyface\Error;

class Handler {
    
    public static function handleError( $code, $message, $file, $line, $context ) {
        throw new \Greyface\Exceptions\ErrorOrWarningException( $code, $message, $file, $line, $context );
    }
    
    public static function handleException($exception) {
        
    }
    
    public static function registerHandler() {
        set_error_handler(array('\Greyface\Error\Handler', 'handleError'));
        set_exception_handler(array('\Greyface\Error\Handler', 'handleException'));
        
    }
    
} 