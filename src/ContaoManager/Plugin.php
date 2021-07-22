<?php
/**
 * StoreLocator Open Cage Provider
 *
 * @author    Michael Bösherz <michael.boesherz@numero2.de>
 * @license   LGPL-3.0-or-later
 * @copyright Copyright (c) 2021, numero2 - Agentur für digitales Marketing GbR
 */


namespace numero2\StoreLocatorOpenCageBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use numero2\StoreLocatorOpenCageBundle\StoreLocatorOpenCageBundle;
use numero2\StoreLocatorBundle\StoreLocatorBundle;


class Plugin implements BundlePluginInterface {


    /**
     * {@inheritdoc}
     */
    public function getBundles( ParserInterface $parser ): array {

        return [
            BundleConfig::create(StoreLocatorOpenCageBundle::class)
                ->setLoadAfter([
                    StoreLocatorBundle::class,
                ])
        ];
    }
}
