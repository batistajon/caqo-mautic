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

/* @bundles/EmailBundle/EventListener/TrackingSubscriber.php */
class __TwigTemplate_12dc924ac515e066674e4ac1e21c1128e7fabe63b226914d62c0d648b2d9d5a3 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class TrackingSubscriber implements EventSubscriberInterface
{
    /**
     * @var StatRepository
     */
    private \$statRepository;

    /**
     * TrackingSubscriber constructor.
     */
    public function __construct(StatRepository \$statRepository)
    {
        \$this->statRepository = \$statRepository;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            LeadEvents::ON_CLICKTHROUGH_IDENTIFICATION => ['onIdentifyContact', 0],
        ];
    }

    public function onIdentifyContact(ContactIdentificationEvent \$event)
    {
        \$clickthrough = \$event->getClickthrough();

        // Nothing left to identify by so stick to the tracked lead
        if (empty(\$clickthrough['channel']['email']) && empty(\$clickthrough['stat'])) {
            return;
        }

        /** @var Stat \$stat */
        \$stat = \$this->statRepository->findOneBy(['trackingHash' => \$clickthrough['stat']]);

        if (!\$stat) {
            // Stat doesn't exist so use the tracked lead
            return;
        }

        if (\$stat->getEmail() && (int) \$stat->getEmail()->getId() !== (int) \$clickthrough['channel']['email']) {
            // ID mismatch - fishy so use tracked lead
            return;
        }

        if (!\$contact = \$stat->getLead()) {
            return;
        }

        \$event->setIdentifiedContact(\$contact, 'email');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/TrackingSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/TrackingSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/TrackingSubscriber.php");
    }
}
