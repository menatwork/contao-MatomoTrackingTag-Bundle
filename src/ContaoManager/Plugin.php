<?php

/**
 *  Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MenAtWork\MatomoTrackingTagBundle\ContaoManager
 * @license    GNU/LGPL
 * @filesource
 */

namespace MenAtWork\MatomoTrackingTagBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use MenAtWork\MatomoTrackingTagBundle\MatomoTrackingTagBundle;

/**
 * Class Plugin
 *
 * @package MenAtWork\MatomoTrackingTagBundle\ContaoManager
 */
class Plugin implements BundlePluginInterface
{

    /**
     * @param ParserInterface $parser
     *
     * @return array|ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(MatomoTrackingTagBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['contao-legacy/piwiktrackingtag'])
                ->setReplace(['menatwork/piwiktrackingtag']),
        ];
    }
}