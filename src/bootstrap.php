 <?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    
    ###################################################
    ## AUTOLOADER
    ###################################################
    // require the autoloader
    require('Psr4AutoloaderClass.php');
    
    // get the src path
    $srcPath = __DIR__;
 
    // instantiate the loader
    $loader = new \Psr4AutoloaderClass();

    // register the autoloader
    $loader->register();
 
    // register the base directories for the namespace prefix
    $loader->addNamespace('Greyface', $srcPath.'/classes');
    $loader->addNamespace('Test', $srcPath.'/tests');
    $loader->addNamespace('Symfony', $srcPath.'/../vendor/symfony/yaml/Symfony');
    $loader->addNamespace('Doctrine', $srcPath.'/../vendor/doctrine');

//require '/path/to/doctrine/lib/Doctrine/Common/ClassLoader.php';


    ###################################################
    ## CONFIGURATION
    ###################################################
    $configPath = __DIR__.'/local_config.yaml';
    \Greyface\Configuration\Configurator::readConfiguration($configPath);

    ###################################################
    ## ERROR HANDLER / LOGGING
    ###################################################

    ###################################################
    ## DATABASE
    ###################################################
    $config = new \Doctrine\DBAL\Configuration();


    ###################################################
    ## DISPATCHER
    ###################################################
    
    ###################################################
    ## ROUTER
    ###################################################
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//    // aäösdf#äaösdf
//    $money = new Greyface\Money(5);
//    echo $money->getAmount() ."\n";
//    $request = new Greyface\Http\Request();
//    $request->hello();