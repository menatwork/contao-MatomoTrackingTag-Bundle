<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    MenAtWork\MatomoTrackingTagBundle
 * @license    GNU/LGPL
 * @filesource
 */

namespace MenAtWork\MatomoTrackingTagBundle\Contao;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\CoreBundle\Routing\ScopeMatcher;
use ContentModel;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Matomo goal tracking content element based on https://developer.matomo.org/guides/tracking-javascript-guide
 *
 * If the goal is set on manually, the trackGoal function triggers the matomo tracking.
 */
final class MatomoTrackGoalElement extends ContentElement
{
    /**
     * The template name.
     *
     * @var string
     */
    protected $strTemplate = 'ce_matomo_trackgoal';

    /**
     * The request stack.
     *
     * @var RequestStack
     */
    private $requestStack;

    /**
     * The contao scope matcher.
     *
     * @var ScopeMatcher
     */
    private $scopeMatcher;

    /**
     * {@inheritdoc}
     */
    public function __construct(ContentModel $objElement, string $strColumn = 'main')
    {
        parent::__construct($objElement, $strColumn);

        $container = $this->getContainer();

        $this->requestStack = $container->get('request_stack');
        $this->scopeMatcher = $container->get('contao.routing.scope_matcher');
    }

    /**
     * {@inheritdoc}
     */
    public function generate()
    {
        if ($this->scopeMatcher->isBackendRequest($this->requestStack->getCurrentRequest())) {
            $template = new BackendTemplate('be_wildcard');

            $template->wildcard = '### ' . strtoupper($GLOBALS['TL_LANG']['CTE'][$this->type][0]) . ' ###';

            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * {@inheritdoc}
     */
    protected function compile()
    {
        $this->Template->matomoUrl   = PiwikTrackingTag::getSettings()->piwikPath;
        $this->Template->cookieError = $GLOBALS['TL_LANG']['ERR']['matomoCookie'];
    }
}
