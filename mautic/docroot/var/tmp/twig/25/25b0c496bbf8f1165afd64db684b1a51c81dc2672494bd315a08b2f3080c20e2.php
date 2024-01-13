<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/AssetBundle/EventListener/DetermineWinnerSubscriber.php */
class __TwigTemplate_11e940becbcdc7400ecd75723996036e4a2b17e70346ad241377d77d159762ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

namespace Mautic\\AssetBundle\\EventListener;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Entity\\Download;
use Mautic\\CoreBundle\\Event\\DetermineWinnerEvent;
use Mautic\\EmailBundle\\Entity\\Email;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DetermineWinnerSubscriber implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface
     */
    private \$em;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(EntityManagerInterface \$em, TranslatorInterface \$translator)
    {
        \$this->em         = \$em;
        \$this->translator = \$translator;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            AssetEvents::ON_DETERMINE_DOWNLOAD_RATE_WINNER => ['onDetermineDownloadRateWinner', 0],
        ];
    }

    /**
     * Determines the winner of A/B test based on number of asset downloads.
     */
    public function onDetermineDownloadRateWinner(DetermineWinnerEvent \$event)
    {
        \$repo       = \$this->em->getRepository(Download::class);
        \$parameters = \$event->getParameters();
        \$parent     = \$parameters['parent'];
        \$children   = \$parameters['children'];

        //if this is an email A/B test, then link email to page to form submission
        //if it is a page A/B test, then link form submission to page
        \$type = (\$parent instanceof Email) ? 'email' : 'page';

        \$ids = [\$parent->getId()];

        foreach (\$children as \$c) {
            if (\$c->isPublished()) {
                \$id    = \$c->getId();
                \$ids[] = \$id;
            }
        }

        \$startDate = \$parent->getVariantStartDate();
        if (null != \$startDate && !empty(\$ids)) {
            \$counts = ('page' == \$type) ? \$repo->getDownloadCountsByPage(\$ids, \$startDate) : \$repo->getDownloadCountsByEmail(\$ids, \$startDate);

            \$translator = \$this->translator;
            if (\$counts) {
                \$downloads  = \$support  = \$data  = [];
                \$hasResults = [];

                \$downloadsLabel = \$translator->trans('mautic.asset.abtest.label.downloads');
                \$hitsLabel      = ('page' == \$type) ? \$translator->trans('mautic.asset.abtest.label.hits') : \$translator->trans('mautic.asset.abtest.label.sentemils');
                foreach (\$counts as \$stats) {
                    \$rate                    = (\$stats['total']) ? round((\$stats['count'] / \$stats['total']) * 100, 2) : 0;
                    \$downloads[\$stats['id']] = \$rate;
                    \$data[\$downloadsLabel][] = \$stats['count'];
                    \$data[\$hitsLabel][]      = \$stats['total'];
                    \$support['labels'][]     = \$stats['id'].':'.\$stats['name'].' ('.\$rate.'%)';
                    \$hasResults[]            = \$stats['id'];
                }

                //make sure that parent and published children are included
                if (!in_array(\$parent->getId(), \$hasResults)) {
                    \$data[\$downloadsLabel][] = 0;
                    \$data[\$hitsLabel][]      = 0;
                    \$support['labels'][]     = \$parent->getId().':'.(('page' == \$type) ? \$parent->getTitle() : \$parent->getName()).' (0%)';
                }

                foreach (\$children as \$c) {
                    if (\$c->isPublished()) {
                        if (!in_array(\$c->getId(), \$hasResults)) {
                            \$data[\$downloadsLabel][] = 0;
                            \$data[\$hitsLabel][]      = 0;
                            \$support['labels'][]     = \$c->getId().':'.(('page' == \$type) ? \$c->getTitle() : \$c->getName()).' (0%)';
                        }
                    }
                }
                \$support['data'] = \$data;

                //set max for scales
                \$maxes = [];
                foreach (\$support['data'] as \$data) {
                    \$maxes[] = max(\$data);
                }
                \$top                   = max(\$maxes);
                \$support['step_width'] = (ceil(\$top / 10) * 10);

                //put in order from least to greatest just because
                asort(\$downloads);

                //who's the winner?
                \$max = max(\$downloads);

                //get the page ids with the most number of downloads
                \$winners = (\$max > 0) ? array_keys(\$downloads, \$max) : [];

                \$event->setAbTestResults([
                    'winners'         => \$winners,
                    'support'         => \$support,
                    'basedOn'         => 'asset.downloads',
                    'supportTemplate' => 'MauticPageBundle:SubscribedEvents\\AbTest:bargraph.html.php',
                ]);

                return;
            }
        }

        \$event->setAbTestResults([
            'winners' => [],
            'support' => [],
            'basedOn' => 'asset.downloads',
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/EventListener/DetermineWinnerSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/AssetBundle/EventListener/DetermineWinnerSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/EventListener/DetermineWinnerSubscriber.php");
    }
}
