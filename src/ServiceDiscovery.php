<?php


namespace RstGroup\ServiceDiscovery;


use RstGroup\ServiceDiscovery\Exception\ServiceDiscoveryException;

interface ServiceDiscovery
{
    /**
     * @param string $serviceId service identifier
     * @param array  $options   vendor-specific additional options
     *
     * @return string service identifier
     *
     * @throws ServiceDiscoveryException
     */
    public function register($serviceId, array $options = array());

    /**
     * @param string $serviceId service identifier
     * @param array  $options   vendor-specific additional options
     *
     * @return void
     *
     * @throws ServiceDiscoveryException
     */
    public function deregister($serviceId, array $options = array());
}
