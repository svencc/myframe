<?php

namespace Greyface\Configuration;

class Configurator {
    
    private static $_configuration;
    private static $_yamlParser;
    
    #ini_set('error_reporting', E_ALL);
    #ini_set('display_errors', 1);
    
    public static function readConfiguration($pathToYamlFile) {
        $yaml = self::_getParser();
        self::$_configuration  = $yaml->parse( file_get_contents($pathToYamlFile) );
    }
    
    public static function getDatabaseHostname() {
        return self::_get( array('database', 'hostname') );
    }
    
    public static function  getDatabaseUsername() {
        return self::_get( array('database', 'username') );
    }
    
    public static function  getDatabasePassword() {
        return self::_get( array('database', 'password') );
    }
    
    public static function  getDatabaseDbName() {
        return self::_get( array('database', 'dbName') );
    }
    
    public static function  getErrorLogging() {
        return self::_get( array('error', 'logging') );
    }
    
    public static function  getErrorDisplayErrors() {
        return self::_get( array('error', 'displayErrors') );
    }
    
    private static function _get(array $descriptor) {
        
        $configTree = self::$_configuration;
        
        foreach($descriptor as $level) {
            if (isset($configTree[$level])) {
                $configTree = $configTree[$level];
            } else {
                throw new \Greyface\Configuration\ConfigurationValueNotExistException('Configuration value ['.implode('=>', $descriptor).'] not found!');
            }
        }
        
        return $configTree;
    }
    
    private static function _getParser() {
        if ( !isset(self::$_yamlParser) ) {
            self::$_yamlParser = new \Symfony\Component\Yaml\Parser();
        } 
        return self::$_yamlParser;
    }
}