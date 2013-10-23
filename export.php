<?php

require_once('bootstrap.php');

use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\ORM\Mapping\Driver\DatabaseDriver;

// Read the database
$driver = new DatabaseDriver($em->getConnection()->getSchemaManager());
$driver->setNamespace('Symm\\Wordpress\\Entities\\');
$em->getConfiguration()->setMetadataDriverImpl($driver);

$cmf = new DisconnectedClassMetadataFactory();
$cmf->setEntityManager($em);
$metadata = $cmf->getAllMetadata();

// Create the Entities
$cme = new ClassMetadataExporter();
$exporter = $cme->getExporter('annotation', 'src/');
$entityGenerator = new EntityGenerator();
$entityGenerator->setAnnotationPrefix("");
$exporter->setEntityGenerator($entityGenerator);
$exporter->setMetadata($metadata);
$exporter->export();
