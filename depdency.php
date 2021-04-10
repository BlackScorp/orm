<?php

use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__.'/vendor/autoload.php';

$container= [];

$container['db'] = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'shop',
    'charset' => 'utf8'
];
$container['env']= 'dev';


$container[Configuration::class] = function () use($container){

    $isDevelopment = $container['env'] === 'dev';

    return Setup::createAnnotationMetadataConfiguration(
        [
            __DIR__.'/src/Entity'
        ],$isDevelopment,null,null,false
    );
};

$container[EntityManagerInterface::class] = function() use($container){
    $connection = $container['db'];
    $annotationConfiguration = $container[Configuration::class]();
    return EntityManager::create($connection,$annotationConfiguration);
};
return $container;