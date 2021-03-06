<?php

namespace Ontic\Yaes\SoftwarePackages;

use Ontic\Yaes\Identifiers\IIdentifier;
use Ontic\Yaes\Identifiers\WooCommerceIdentifier;
use Ontic\Yaes\Scanners\IScanner;
use Ontic\Yaes\Scanners\WooCommerce\OutdatedVersionScanner;
use Symfony\Component\Console\Command\Command;

class WooCommerceSoftwarePackage implements ISoftwarePackage
{
    /**
     * @return string
     */
    function getCode()
    {
        return 'woocommerce';
    }

    /**
     * @return string
     */
    function getName()
    {
        return 'WooCommerce';
    }

    /**
     * @return IIdentifier
     */
    function getIdentifier()
    {
        return new WooCommerceIdentifier($this);
    }

    /**
     * @return IScanner[]
     */
    function getScanners()
    {
        return [
            new OutdatedVersionScanner()
        ];
    }

    /**
     * @return Command[]
     */
    function getCommands()
    {
        return [];
    }
}