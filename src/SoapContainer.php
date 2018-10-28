<?php

namespace GoetasWebservices\Client\SalesforceEnterprise;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'goetas_webservices.soap_client.metadata_reader' => 'getGoetasWebservices_SoapClient_MetadataReaderService',
        );
        $this->privates = array(
            'goetas_webservices.soap_client.metadata_reader' => true,
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap_client.metadata.generator' => true,
            'goetas_webservices.soap_client.metadata_loader.array' => true,
            'goetas_webservices.soap_client.metadata_loader.dev' => true,
            'goetas_webservices.soap_client.metadata_reader' => true,
            'goetas_webservices.soap_client.stub.class_writer' => true,
            'goetas_webservices.soap_client.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the private 'goetas_webservices.soap_client.metadata_reader' shared service.
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_SoapClient_MetadataReaderService()
    {
        return $this->services['goetas_webservices.soap_client.metadata_reader'] = new \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap_client.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'goetas_webservices.soap_client.metadata' => array(
                'service.wsdl' => array(
                    'SforceService' => array(
                        'Soap' => array(
                            'operations' => array(
                                'login' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'login',
                                    'method' => 'login',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\LoginInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\LoginInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\LoginInput',
                                        'parts' => array(
                                            'parameters' => 'Login',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\LoginOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\LoginOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\LoginOutput',
                                        'parts' => array(
                                            'parameters' => 'LoginResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSObject' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSObject',
                                    'method' => 'describeSObject',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSObjectInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSObjectInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSObjectInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSObject',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSObjectOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSObjectOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSObjectOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSObjectResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSObjects' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSObjects',
                                    'method' => 'describeSObjects',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSObjectsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSObjectsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSObjectsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSObjects',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSObjectsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSObjectsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSObjectsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSObjectsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeGlobal' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeGlobal',
                                    'method' => 'describeGlobal',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeGlobalInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeGlobalInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeGlobalInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeGlobal',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeGlobalOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeGlobalOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeGlobalOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeGlobalResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeDataCategoryGroups' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeDataCategoryGroups',
                                    'method' => 'describeDataCategoryGroups',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeDataCategoryGroupsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeDataCategoryGroupsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeDataCategoryGroupsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeDataCategoryGroups',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeDataCategoryGroupsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeDataCategoryGroupsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeDataCategoryGroupsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeDataCategoryGroupsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeDataCategoryGroupStructures' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeDataCategoryGroupStructures',
                                    'method' => 'describeDataCategoryGroupStructures',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeDataCategoryGroupStructuresInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeDataCategoryGroupStructuresInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeDataCategoryGroupStructuresInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeDataCategoryGroupStructures',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeDataCategoryGroupStructuresOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeDataCategoryGroupStructuresOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeDataCategoryGroupStructuresOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeDataCategoryGroupStructuresResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeDataCategoryMappings' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeDataCategoryMappings',
                                    'method' => 'describeDataCategoryMappings',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeDataCategoryMappingsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeDataCategoryMappingsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeDataCategoryMappingsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeDataCategoryMappings',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeDataCategoryMappingsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeDataCategoryMappingsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeDataCategoryMappingsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeDataCategoryMappingsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeKnowledgeSettings' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeKnowledgeSettings',
                                    'method' => 'describeKnowledgeSettings',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeKnowledgeSettingsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeKnowledgeSettingsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeKnowledgeSettingsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeKnowledgeSettings',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeKnowledgeSettingsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeKnowledgeSettingsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeKnowledgeSettingsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeKnowledgeSettingsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeAppMenu' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeAppMenu',
                                    'method' => 'describeAppMenu',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeAppMenuInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeAppMenuInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeAppMenuInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeAppMenu',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeAppMenuOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeAppMenuOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeAppMenuOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeAppMenuResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeGlobalTheme' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeGlobalTheme',
                                    'method' => 'describeGlobalTheme',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeGlobalThemeInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeGlobalThemeInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeGlobalThemeInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeGlobalTheme',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeGlobalThemeOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeGlobalThemeOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeGlobalThemeOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeGlobalThemeResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeTheme' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeTheme',
                                    'method' => 'describeTheme',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeThemeInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeThemeInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeThemeInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeTheme',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeThemeOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeThemeOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeThemeOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeThemeResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeLayout' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeLayout',
                                    'method' => 'describeLayout',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeLayoutInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeLayoutInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeLayoutInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeLayout',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeLayoutOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeLayoutOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeLayoutOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeLayoutResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSoftphoneLayout' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSoftphoneLayout',
                                    'method' => 'describeSoftphoneLayout',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSoftphoneLayoutInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSoftphoneLayoutInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSoftphoneLayoutInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSoftphoneLayout',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSoftphoneLayoutOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSoftphoneLayoutOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSoftphoneLayoutOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSoftphoneLayoutResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSearchLayouts' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSearchLayouts',
                                    'method' => 'describeSearchLayouts',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSearchLayoutsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSearchLayoutsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSearchLayoutsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSearchLayouts',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSearchLayoutsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSearchLayoutsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSearchLayoutsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSearchLayoutsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSearchableEntities' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSearchableEntities',
                                    'method' => 'describeSearchableEntities',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSearchableEntitiesInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSearchableEntitiesInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSearchableEntitiesInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSearchableEntities',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSearchableEntitiesOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSearchableEntitiesOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSearchableEntitiesOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSearchableEntitiesResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSearchScopeOrder' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSearchScopeOrder',
                                    'method' => 'describeSearchScopeOrder',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSearchScopeOrderInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSearchScopeOrderInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSearchScopeOrderInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSearchScopeOrder',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSearchScopeOrderOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSearchScopeOrderOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSearchScopeOrderOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSearchScopeOrderResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeCompactLayouts' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeCompactLayouts',
                                    'method' => 'describeCompactLayouts',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeCompactLayoutsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeCompactLayoutsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeCompactLayoutsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeCompactLayouts',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeCompactLayoutsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeCompactLayoutsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeCompactLayoutsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeCompactLayoutsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describePathAssistants' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describePathAssistants',
                                    'method' => 'describePathAssistants',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribePathAssistantsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribePathAssistantsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribePathAssistantsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribePathAssistants',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribePathAssistantsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribePathAssistantsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribePathAssistantsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribePathAssistantsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeApprovalLayout' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeApprovalLayout',
                                    'method' => 'describeApprovalLayout',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeApprovalLayoutInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeApprovalLayoutInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeApprovalLayoutInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeApprovalLayout',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeApprovalLayoutOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeApprovalLayoutOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeApprovalLayoutOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeApprovalLayoutResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSoqlListViews' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSoqlListViews',
                                    'method' => 'describeSoqlListViews',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSoqlListViewsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSoqlListViewsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSoqlListViewsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSoqlListViews',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSoqlListViewsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSoqlListViewsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSoqlListViewsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSoqlListViewsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'executeListView' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'executeListView',
                                    'method' => 'executeListView',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ExecuteListViewInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ExecuteListViewInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ExecuteListViewInput',
                                        'parts' => array(
                                            'parameters' => 'ExecuteListView',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ExecuteListViewOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ExecuteListViewOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ExecuteListViewOutput',
                                        'parts' => array(
                                            'parameters' => 'ExecuteListViewResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeSObjectListViews' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeSObjectListViews',
                                    'method' => 'describeSObjectListViews',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSObjectListViewsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSObjectListViewsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSObjectListViewsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSObjectListViews',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeSObjectListViewsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeSObjectListViewsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeSObjectListViewsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeSObjectListViewsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeTabs' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeTabs',
                                    'method' => 'describeTabs',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeTabsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeTabsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeTabsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeTabs',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeTabsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeTabsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeTabsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeTabsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeAllTabs' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeAllTabs',
                                    'method' => 'describeAllTabs',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeAllTabsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeAllTabsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeAllTabsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeAllTabs',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeAllTabsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeAllTabsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeAllTabsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeAllTabsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describePrimaryCompactLayouts' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describePrimaryCompactLayouts',
                                    'method' => 'describePrimaryCompactLayouts',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribePrimaryCompactLayoutsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribePrimaryCompactLayoutsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribePrimaryCompactLayoutsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribePrimaryCompactLayouts',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribePrimaryCompactLayoutsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribePrimaryCompactLayoutsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribePrimaryCompactLayoutsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribePrimaryCompactLayoutsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'create' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'create',
                                    'method' => 'create',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\CreateInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\CreateInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\CreateInput',
                                        'parts' => array(
                                            'parameters' => 'Create',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\CreateOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\CreateOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\CreateOutput',
                                        'parts' => array(
                                            'parameters' => 'CreateResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'update' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'update',
                                    'method' => 'update',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\UpdateInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\UpdateInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\UpdateInput',
                                        'parts' => array(
                                            'parameters' => 'Update',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\UpdateOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\UpdateOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\UpdateOutput',
                                        'parts' => array(
                                            'parameters' => 'UpdateResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'upsert' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'upsert',
                                    'method' => 'upsert',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\UpsertInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\UpsertInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\UpsertInput',
                                        'parts' => array(
                                            'parameters' => 'Upsert',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\UpsertOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\UpsertOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\UpsertOutput',
                                        'parts' => array(
                                            'parameters' => 'UpsertResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'merge' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'merge',
                                    'method' => 'merge',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\MergeInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\MergeInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\MergeInput',
                                        'parts' => array(
                                            'parameters' => 'Merge',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\MergeOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\MergeOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\MergeOutput',
                                        'parts' => array(
                                            'parameters' => 'MergeResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'delete' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'delete',
                                    'method' => 'delete',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DeleteInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DeleteInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DeleteInput',
                                        'parts' => array(
                                            'parameters' => 'Delete',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DeleteOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DeleteOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DeleteOutput',
                                        'parts' => array(
                                            'parameters' => 'DeleteResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'undelete' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'undelete',
                                    'method' => 'undelete',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\UndeleteInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\UndeleteInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\UndeleteInput',
                                        'parts' => array(
                                            'parameters' => 'Undelete',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\UndeleteOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\UndeleteOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\UndeleteOutput',
                                        'parts' => array(
                                            'parameters' => 'UndeleteResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'emptyRecycleBin' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'emptyRecycleBin',
                                    'method' => 'emptyRecycleBin',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\EmptyRecycleBinInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\EmptyRecycleBinInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\EmptyRecycleBinInput',
                                        'parts' => array(
                                            'parameters' => 'EmptyRecycleBin',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\EmptyRecycleBinOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\EmptyRecycleBinOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\EmptyRecycleBinOutput',
                                        'parts' => array(
                                            'parameters' => 'EmptyRecycleBinResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'retrieve' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'retrieve',
                                    'method' => 'retrieve',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RetrieveInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RetrieveInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RetrieveInput',
                                        'parts' => array(
                                            'parameters' => 'Retrieve',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RetrieveOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RetrieveOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RetrieveOutput',
                                        'parts' => array(
                                            'parameters' => 'RetrieveResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'process' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'process',
                                    'method' => 'process',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ProcessInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ProcessInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ProcessInput',
                                        'parts' => array(
                                            'parameters' => 'Process',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ProcessOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ProcessOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ProcessOutput',
                                        'parts' => array(
                                            'parameters' => 'ProcessResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'convertLead' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'convertLead',
                                    'method' => 'convertLead',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ConvertLeadInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ConvertLeadInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ConvertLeadInput',
                                        'parts' => array(
                                            'parameters' => 'ConvertLead',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ConvertLeadOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ConvertLeadOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ConvertLeadOutput',
                                        'parts' => array(
                                            'parameters' => 'ConvertLeadResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'logout' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'logout',
                                    'method' => 'logout',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\LogoutInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\LogoutInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\LogoutInput',
                                        'parts' => array(
                                            'parameters' => 'Logout',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\LogoutOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\LogoutOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\LogoutOutput',
                                        'parts' => array(
                                            'parameters' => 'LogoutResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'invalidateSessions' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'invalidateSessions',
                                    'method' => 'invalidateSessions',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\InvalidateSessionsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\InvalidateSessionsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\InvalidateSessionsInput',
                                        'parts' => array(
                                            'parameters' => 'InvalidateSessions',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\InvalidateSessionsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\InvalidateSessionsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\InvalidateSessionsOutput',
                                        'parts' => array(
                                            'parameters' => 'InvalidateSessionsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'getDeleted' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'getDeleted',
                                    'method' => 'getDeleted',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetDeletedInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetDeletedInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetDeletedInput',
                                        'parts' => array(
                                            'parameters' => 'GetDeleted',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetDeletedOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetDeletedOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetDeletedOutput',
                                        'parts' => array(
                                            'parameters' => 'GetDeletedResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'getUpdated' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'getUpdated',
                                    'method' => 'getUpdated',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetUpdatedInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetUpdatedInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetUpdatedInput',
                                        'parts' => array(
                                            'parameters' => 'GetUpdated',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetUpdatedOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetUpdatedOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetUpdatedOutput',
                                        'parts' => array(
                                            'parameters' => 'GetUpdatedResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'query' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'query',
                                    'method' => 'query',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\QueryInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\QueryInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\QueryInput',
                                        'parts' => array(
                                            'parameters' => 'Query',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\QueryOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\QueryOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\QueryOutput',
                                        'parts' => array(
                                            'parameters' => 'QueryResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'queryAll' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'queryAll',
                                    'method' => 'queryAll',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\QueryAllInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\QueryAllInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\QueryAllInput',
                                        'parts' => array(
                                            'parameters' => 'QueryAll',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\QueryAllOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\QueryAllOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\QueryAllOutput',
                                        'parts' => array(
                                            'parameters' => 'QueryAllResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'queryMore' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'queryMore',
                                    'method' => 'queryMore',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\QueryMoreInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\QueryMoreInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\QueryMoreInput',
                                        'parts' => array(
                                            'parameters' => 'QueryMore',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\QueryMoreOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\QueryMoreOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\QueryMoreOutput',
                                        'parts' => array(
                                            'parameters' => 'QueryMoreResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'search' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'search',
                                    'method' => 'search',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SearchInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SearchInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SearchInput',
                                        'parts' => array(
                                            'parameters' => 'Search',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SearchOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SearchOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SearchOutput',
                                        'parts' => array(
                                            'parameters' => 'SearchResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'getServerTimestamp' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'getServerTimestamp',
                                    'method' => 'getServerTimestamp',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetServerTimestampInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetServerTimestampInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetServerTimestampInput',
                                        'parts' => array(
                                            'parameters' => 'GetServerTimestamp',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetServerTimestampOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetServerTimestampOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetServerTimestampOutput',
                                        'parts' => array(
                                            'parameters' => 'GetServerTimestampResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'setPassword' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'setPassword',
                                    'method' => 'setPassword',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SetPasswordInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SetPasswordInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SetPasswordInput',
                                        'parts' => array(
                                            'parameters' => 'SetPassword',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SetPasswordOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SetPasswordOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SetPasswordOutput',
                                        'parts' => array(
                                            'parameters' => 'SetPasswordResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'changeOwnPassword' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'changeOwnPassword',
                                    'method' => 'changeOwnPassword',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ChangeOwnPasswordInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ChangeOwnPasswordInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ChangeOwnPasswordInput',
                                        'parts' => array(
                                            'parameters' => 'ChangeOwnPassword',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ChangeOwnPasswordOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ChangeOwnPasswordOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ChangeOwnPasswordOutput',
                                        'parts' => array(
                                            'parameters' => 'ChangeOwnPasswordResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'resetPassword' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'resetPassword',
                                    'method' => 'resetPassword',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ResetPasswordInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ResetPasswordInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ResetPasswordInput',
                                        'parts' => array(
                                            'parameters' => 'ResetPassword',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\ResetPasswordOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\ResetPasswordOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\ResetPasswordOutput',
                                        'parts' => array(
                                            'parameters' => 'ResetPasswordResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'getUserInfo' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'getUserInfo',
                                    'method' => 'getUserInfo',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetUserInfoInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetUserInfoInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetUserInfoInput',
                                        'parts' => array(
                                            'parameters' => 'GetUserInfo',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\GetUserInfoOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\GetUserInfoOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\GetUserInfoOutput',
                                        'parts' => array(
                                            'parameters' => 'GetUserInfoResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'deleteByExample' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'deleteByExample',
                                    'method' => 'deleteByExample',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DeleteByExampleInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DeleteByExampleInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DeleteByExampleInput',
                                        'parts' => array(
                                            'parameters' => 'DeleteByExample',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DeleteByExampleOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DeleteByExampleOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DeleteByExampleOutput',
                                        'parts' => array(
                                            'parameters' => 'DeleteByExampleResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'sendEmailMessage' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'sendEmailMessage',
                                    'method' => 'sendEmailMessage',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SendEmailMessageInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SendEmailMessageInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SendEmailMessageInput',
                                        'parts' => array(
                                            'parameters' => 'SendEmailMessage',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SendEmailMessageOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SendEmailMessageOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SendEmailMessageOutput',
                                        'parts' => array(
                                            'parameters' => 'SendEmailMessageResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'sendEmail' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'sendEmail',
                                    'method' => 'sendEmail',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SendEmailInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SendEmailInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SendEmailInput',
                                        'parts' => array(
                                            'parameters' => 'SendEmail',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\SendEmailOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\SendEmailOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\SendEmailOutput',
                                        'parts' => array(
                                            'parameters' => 'SendEmailResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'renderEmailTemplate' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'renderEmailTemplate',
                                    'method' => 'renderEmailTemplate',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RenderEmailTemplateInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RenderEmailTemplateInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RenderEmailTemplateInput',
                                        'parts' => array(
                                            'parameters' => 'RenderEmailTemplate',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RenderEmailTemplateOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RenderEmailTemplateOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RenderEmailTemplateOutput',
                                        'parts' => array(
                                            'parameters' => 'RenderEmailTemplateResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'renderStoredEmailTemplate' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'renderStoredEmailTemplate',
                                    'method' => 'renderStoredEmailTemplate',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RenderStoredEmailTemplateInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RenderStoredEmailTemplateInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RenderStoredEmailTemplateInput',
                                        'parts' => array(
                                            'parameters' => 'RenderStoredEmailTemplate',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RenderStoredEmailTemplateOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RenderStoredEmailTemplateOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RenderStoredEmailTemplateOutput',
                                        'parts' => array(
                                            'parameters' => 'RenderStoredEmailTemplateResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'performQuickActions' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'performQuickActions',
                                    'method' => 'performQuickActions',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\PerformQuickActionsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\PerformQuickActionsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\PerformQuickActionsInput',
                                        'parts' => array(
                                            'parameters' => 'PerformQuickActions',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\PerformQuickActionsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\PerformQuickActionsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\PerformQuickActionsOutput',
                                        'parts' => array(
                                            'parameters' => 'PerformQuickActionsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeQuickActions' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeQuickActions',
                                    'method' => 'describeQuickActions',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeQuickActionsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeQuickActionsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeQuickActionsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeQuickActions',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeQuickActionsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeQuickActionsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeQuickActionsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeQuickActionsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeQuickActionsForRecordType' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeQuickActionsForRecordType',
                                    'method' => 'describeQuickActionsForRecordType',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeQuickActionsForRecordTypeInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeQuickActionsForRecordTypeInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeQuickActionsForRecordTypeInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeQuickActionsForRecordType',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeQuickActionsForRecordTypeOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeQuickActionsForRecordTypeOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeQuickActionsForRecordTypeOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeQuickActionsForRecordTypeResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeAvailableQuickActions' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeAvailableQuickActions',
                                    'method' => 'describeAvailableQuickActions',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeAvailableQuickActionsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeAvailableQuickActionsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeAvailableQuickActionsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeAvailableQuickActions',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeAvailableQuickActionsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeAvailableQuickActionsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeAvailableQuickActionsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeAvailableQuickActionsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'retrieveQuickActionTemplates' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'retrieveQuickActionTemplates',
                                    'method' => 'retrieveQuickActionTemplates',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RetrieveQuickActionTemplatesInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RetrieveQuickActionTemplatesInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RetrieveQuickActionTemplatesInput',
                                        'parts' => array(
                                            'parameters' => 'RetrieveQuickActionTemplates',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RetrieveQuickActionTemplatesOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RetrieveQuickActionTemplatesOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RetrieveQuickActionTemplatesOutput',
                                        'parts' => array(
                                            'parameters' => 'RetrieveQuickActionTemplatesResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'retrieveMassQuickActionTemplates' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'retrieveMassQuickActionTemplates',
                                    'method' => 'retrieveMassQuickActionTemplates',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RetrieveMassQuickActionTemplatesInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RetrieveMassQuickActionTemplatesInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RetrieveMassQuickActionTemplatesInput',
                                        'parts' => array(
                                            'parameters' => 'RetrieveMassQuickActionTemplates',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\RetrieveMassQuickActionTemplatesOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\RetrieveMassQuickActionTemplatesOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\RetrieveMassQuickActionTemplatesOutput',
                                        'parts' => array(
                                            'parameters' => 'RetrieveMassQuickActionTemplatesResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeVisualForce' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeVisualForce',
                                    'method' => 'describeVisualForce',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeVisualForceInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeVisualForceInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeVisualForceInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeVisualForce',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeVisualForceOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeVisualForceOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeVisualForceOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeVisualForceResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'findDuplicates' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'findDuplicates',
                                    'method' => 'findDuplicates',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\FindDuplicatesInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\FindDuplicatesInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\FindDuplicatesInput',
                                        'parts' => array(
                                            'parameters' => 'FindDuplicates',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\FindDuplicatesOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\FindDuplicatesOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\FindDuplicatesOutput',
                                        'parts' => array(
                                            'parameters' => 'FindDuplicatesResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'findDuplicatesByIds' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'findDuplicatesByIds',
                                    'method' => 'findDuplicatesByIds',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\FindDuplicatesByIdsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\FindDuplicatesByIdsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\FindDuplicatesByIdsInput',
                                        'parts' => array(
                                            'parameters' => 'FindDuplicatesByIds',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\FindDuplicatesByIdsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\FindDuplicatesByIdsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\FindDuplicatesByIdsOutput',
                                        'parts' => array(
                                            'parameters' => 'FindDuplicatesByIdsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'describeNouns' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'describeNouns',
                                    'method' => 'describeNouns',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeNounsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeNounsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeNounsInput',
                                        'parts' => array(
                                            'parameters' => 'DescribeNouns',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Messages\\DescribeNounsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapEnvelope\\Headers\\DescribeNounsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types\\SoapParts\\DescribeNounsOutput',
                                        'parts' => array(
                                            'parameters' => 'DescribeNounsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://login.salesforce.com/services/Soap/c/44.0',
                        ),
                    ),
                ),
            ),
            'goetas_webservices.soap_client.config' => array(
                'namespaces' => array(
                    'urn:enterprise.soap.sforce.com' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Types',
                    'urn:fault.enterprise.soap.sforce.com' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Fault',
                    'urn:sobject.enterprise.soap.sforce.com' => 'GoetasWebservices\\Client\\SalesforceEnterprise\\Sobject',
                ),
                'destinations_php' => array(
                    'GoetasWebservices\\Client\\SalesforceEnterprise' => 'src',
                ),
                'destinations_jms' => array(
                    'GoetasWebservices\\Client\\SalesforceEnterprise' => 'metadata',
                ),
                'metadata' => array(
                    'service.wsdl' => NULL,
                ),
                'alternative_endpoints' => array(

                ),
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => array(

                ),
                'aliases' => array(

                ),
                'headers' => '\\SoapEnvelope\\Headers',
                'parts' => '\\SoapEnvelope\\Parts',
                'messages' => '\\SoapEnvelope\\Messages',
            ),
            'goetas_webservices.soap_client.unwrap_returns' => false,
        );
    }
}
