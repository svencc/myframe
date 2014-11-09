<?php

namespace Myframe\Database;

class MyDB extends {
    
    private $_dbDriver;
    private $_dbUser;
    private $_dbPassword;
    private $_dbName;
    
    private function __construct(Descriptor $descriptor) {

    }
    
    private function __clone() {
        
    }
    
    public static function setCredentials($dbUser, $dbPassword, $dbName, $dbDriver) {
        new self($dbUser, $dbPassword, $dbName, $dbDriver);
    }
    
    public static function setEntityMappingPath($pathToEntityYAML) {
        new self($dbUser, $dbPassword, $dbName, $dbDriver);
    }
    
    public static function getInstance() {
        
    }
}