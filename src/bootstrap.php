 <?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    
    ###################################################
    ## Get the source path
    ###################################################
    // get the src path
    $srcPath = __DIR__;
    
    ###################################################
    ## AUTOLOADER
    ###################################################
    // require the autoloaders
    require_once "../vendor/autoload.php";

    ###################################################
    ## CONFIGURATION
    ###################################################
    $configPath = __DIR__.'/local_config.yaml';    
    
    Myframe\Configuration\Configurator::readConfiguration($configPath);

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
    
    
    
    
    
    
    
    
    
    
    
    
    
echo 'hello';    
//    // aäösdf#äaösdf
//    $money = new Greyface\Money(5);
//    echo $money->getAmount() ."\n";
//    $request = new Greyface\Http\Request();
//    $request->hello();