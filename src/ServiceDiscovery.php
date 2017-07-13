<?php


namespace RstGroup\ServiceDiscovery;


use RstGroup\ServiceDiscovery\Exception\ServiceDiscoveryException;

interface ServiceDiscovery
{
    /**
     * @param string $name
     * @param array  $options vendor-specific additional options
     *
     * @return mixed
     *
     * @throws ServiceDiscoveryException
     */
    public function register($name, array $options);

    /**
     * @param string $name
     * @param array  $options vendor-specific additional options
     *
     * @return mixed
     *
     * @throws ServiceDiscoveryException
     */
    public function deregister($name, array $options);
}
