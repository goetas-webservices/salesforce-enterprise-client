<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\SalesforceEnterprise\SoapContainer;
use GoetasWebservices\Client\SalesforceEnterprise\SoapStubs\Soap;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client Soap
 */
$client = $factory->getClient('service.wsdl','Soap', 'SforceService');

// Returns standard information relevant to the current user 
$result = $client->getUserInfo(/* put here your params */);

var_dump($result);
