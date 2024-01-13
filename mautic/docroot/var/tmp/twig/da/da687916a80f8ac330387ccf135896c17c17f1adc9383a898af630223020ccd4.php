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

/* @bundles/NotificationBundle/Controller/AppCallbackController.php */
class __TwigTemplate_df35abb765cb8380eb4f7d64efeb05ccae1df71e0c5154e16d8c6688d63f612b extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AppCallbackController extends CommonController
{
    public function indexAction(Request \$request)
    {
        \$requestBody = json_decode(\$request->getContent(), true);
        \$em          = \$this->get('doctrine.orm.entity_manager');
        \$contactRepo = \$em->getRepository(Lead::class);
        \$matchData   = [
            'email' => \$requestBody['email'],
        ];

        /** @var Lead \$contact */
        \$contact = \$contactRepo->findOneBy(\$matchData);

        if (null === \$contact) {
            \$contact = new Lead();
            \$contact->setEmail(\$requestBody['email']);
            \$contact->setLastActive(new \\DateTime());
        }

        \$pushIdCreated = false;

        if (array_key_exists('push_id', \$requestBody)) {
            \$pushIdCreated = true;
            \$contact->addPushIDEntry(\$requestBody['push_id'], \$requestBody['enabled'], true);
            \$contactRepo->saveEntity(\$contact);
        }

        \$statCreated = false;

        if (array_key_exists('stat', \$requestBody)) {
            \$stat             = \$requestBody['stat'];
            \$notificationRepo = \$em->getRepository(Notification::class);
            \$notification     = \$notificationRepo->getEntity(\$stat['notification_id']);

            if (null !== \$notification) {
                \$statCreated = true;
                \$this->getModel('notification')->createStatEntry(\$notification, \$contact, \$stat['source'], \$stat['source_id']);
            }
        }

        return new JsonResponse([
            'contact_id'       => \$contact->getId(),
            'stat_recorded'    => \$statCreated,
            'push_id_recorded' => \$pushIdCreated ?: 'existing',
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
        return "@bundles/NotificationBundle/Controller/AppCallbackController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/AppCallbackController.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Controller/AppCallbackController.php");
    }
}
