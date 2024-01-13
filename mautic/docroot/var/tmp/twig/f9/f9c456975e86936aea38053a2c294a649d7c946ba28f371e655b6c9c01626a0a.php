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

/* @bundles/ChannelBundle/Controller/AjaxController.php */
class __TwigTemplate_0aeba4956a0a432dfe8615fc15470bb275463cbc21d185797ba3eaec6a7cf0a7 extends Template
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

namespace Mautic\\ChannelBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\AjaxLookupControllerTrait;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    use AjaxLookupControllerTrait;

    /**
     * @param \$eventId
     * @param \$contactId
     *
     * @return LeadEventLog|\\Symfony\\Component\\HttpFoundation\\JsonResponse
     *
     * @throws \\Exception
     */
    public function cancelQueuedMessageEventAction(Request \$request)
    {
        \$dataArray      = ['success' => 0];
        \$messageQueueId = (int) \$request->request->get('channelId');
        \$queueModel     = \$this->getModel('channel.queue');
        \$queuedMessage  = \$queueModel->getEntity(\$messageQueueId);
        if (\$queuedMessage) {
            \$queuedMessage->setStatus('cancelled');
            \$queueModel->saveEntity(\$queuedMessage);
            \$dataArray = ['success' => 1];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/ChannelBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Controller/AjaxController.php");
    }
}
