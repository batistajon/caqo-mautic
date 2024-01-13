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

/* @bundles/SmsBundle/Controller/AjaxController.php */
class __TwigTemplate_1699b326ef733cf289aa55715951d2efe155d5e492957189549067998528de18 extends Template
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

namespace Mautic\\SmsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\AjaxLookupControllerTrait;
use Mautic\\SmsBundle\\Broadcast\\BroadcastQuery;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    use AjaxLookupControllerTrait;

    protected function getSmsCountStatsAction(Request \$request)
    {
        /** @var SmsModel \$model */
        \$model = \$this->getModel('sms');
        /** @var BroadcastQuery \$broadcastQuery */
        \$broadcastQuery     = \$this->get('mautic.sms.broadcast.query');
        \$cacheStorageHelper = \$this->get('mautic.helper.cache_storage');

        \$id  = \$request->get('id');
        \$ids = \$request->get('ids');

        // Support for legacy calls
        if (!\$ids && \$id) {
            \$ids = [\$id];
        }

        \$data = [];
        foreach (\$ids as \$id) {
            if (\$sms = \$model->getEntity(\$id)) {
                if ('list' !== \$sms->getSmsType()) {
                    continue;
                }

                \$pending = \$broadcastQuery->getPendingCount(\$sms);
                \$cacheStorageHelper->set(sprintf('%s|%s|%s', 'sms', \$sms->getId(), 'pending'), \$pending);
                if (!\$pending) {
                    continue;
                }
                \$data[] = [
                    'id'          => \$id,
                    'pending'     => \$this->translator->trans(
                        'mautic.sms.stat.leadcount',
                        ['%count%' => \$pending]
                    ),
                ];
            }
        }

        // Support for legacy calls
        if (\$request->get('id')) {
            \$data = \$data[0];
        } else {
            \$data = [
                'success' => 1,
                'stats'   => \$data,
            ];
        }

        return new JsonResponse(\$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/SmsBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Controller/AjaxController.php");
    }
}
