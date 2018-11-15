<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\SalesforceEnterprise\SoapContainer;
use GoetasWebservices\Client\SalesforceEnterprise\SoapStubs\Soap;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();

// use this when cloning this repository and keeping the directory, comment it when including goetas-webservices/salesforce-enterprise-client via composer
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();

// uncomment this when including goetas-webservices/salesforce-enterprise-client via composer
// $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container, null, __DIR__ . '/vendor/goetas-webservices/salesforce-enterprise-client')->build();

$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client Soap
 */
$client = $factory->getClient('service.wsdl','Soap', 'SforceService');

// Returns standard information relevant to the current user 
$result = $client->getUserInfo(/* put here your params */);

var_dump($result);
