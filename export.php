<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
use Doctrine\ORM\Tools\EntityGenerator;

$paths = array("src/entities");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'wordpress',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);


// Read the database
$em->getConfiguration()->setMetadataDriverImpl(
        new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
                    $em->getConnection()->getSchemaManager()
                        )
                    );

$cmf = new DisconnectedClassMetadataFactory();
$cmf->setEntityManager($em);
$metadata = $cmf->getAllMetadata();


// Create the Entities
$cme = new ClassMetadataExporter();
$exporter = $cme->getExporter('annotation', 'src/entities');
$entityGenerator = new EntityGenerator();
$entityGenerator->setAnnotationPrefix("");
$exporter->setEntityGenerator($entityGenerator);
$exporter->setMetadata($metadata);
$exporter->export();
