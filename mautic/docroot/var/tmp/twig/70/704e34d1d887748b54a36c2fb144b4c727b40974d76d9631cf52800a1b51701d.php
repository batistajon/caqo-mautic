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

/* @bundles/SmsBundle/EventListener/TrackingSubscriber.php */
class __TwigTemplate_b37e6ebfad55981e2b58ff5442aeb16535d51182545a1941c00fbb7f1c42e051 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\SmsBundle\\Entity\\Stat;
use Mautic\\SmsBundle\\Entity\\StatRepository;
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
        if (empty(\$clickthrough['channel']['sms']) && empty(\$clickthrough['stat'])) {
            return;
        }

        /** @var Stat \$stat */
        \$stat = \$this->statRepository->findOneBy(['trackingHash' => \$clickthrough['stat']]);

        if (!\$stat) {
            // Stat doesn't exist so use the tracked lead
            return;
        }

        if (\$stat->getSms() && (int) \$stat->getSms()->getId() !== (int) \$clickthrough['channel']['sms']) {
            // ID mismatch - fishy so use tracked lead
            return;
        }

        if (!\$contact = \$stat->getLead()) {
            return;
        }

        \$event->setIdentifiedContact(\$contact, 'sms');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/EventListener/TrackingSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/TrackingSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/EventListener/TrackingSubscriber.php");
    }
}
